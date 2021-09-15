<?php

namespace App\Controllers;

use App\Entities\User;
use App\Forms\LoginForm;
use PhpFromZero\Http\Request;
use PhpFromZero\Http\Response;
use PhpFromZero\Security\SecurityController;
use App\Forms\RegisterForm;
use App\Repositories\UserRepository;
use App\Repositories\StudentRepository;
use App\Repositories\TeacherRepository;
use App\Repositories\CensorRepository;
use App\Repositories\ParentRepository;
use App\Repositories\InformaticRepository;
use PhpFromZero\Utils\Utils;


/**
 * Handle all thing about user's auth(entication|orization)
 * 
 */
class AuthController extends SecurityController
{

    // User repository
    protected $userRepo;
    protected $studentRepo;


    public function __construct()
    {
        parent::__construct();

        $this->userRepo = new UserRepository();
        $this->studentRepo = new StudentRepository();
        $this->teacherRepo = new TeacherRepository();
        $this->censorRepo = new CensorRepository();
        $this->parentRepo = new ParentRepository();
        $this->informaticRepo = new InformaticRepository();
    }


    /**
     * login page
     * 
     * @param 
     */
    public function login(Request $request): Response
    {

        if ($request->getUser()) {
            if($request->getUser()->getRole() == "ROLE_STUDENT"){
                return $this->redirect($request, "/student/me");  
            }
            if($request->getUser()->getRole() == "ROLE_TEACHER"){
                return $this->redirect($request, "/teacher/me");  
            }
            if($request->getUser()->getRole() == "ROLE_PARENT"){
                return $this->redirect($request, "/parent/me");  
            }
            if($request->getUser()->getRole() == "ROLE_CENSOR"){
                return $this->redirect($request, "/administration/censor");  
            }
            if($request->getUser()->getRole() == "ROLE_INFORMATIC"){
                return $this->redirect($request, "/administration/InformaticService");  
            }
            return $this->redirect($request, "/user/me");
        }

        $form = new LoginForm($request->getUrl());
        $errorMsg = null;


        // Handle the form and prepare field form
        $form->handle($request);

        if ($form->isSubmitted()) {

            // Get data from the form
            $password = $form->get("password");
            $email = $form->get("email");

            // fetch the user
            $user = $this->userRepo->findOneBy(["email" => $email]);
            if (!$user) {
                $errorMsg =  "Utilisateur inconnu";
                goto sendResponse;
            }

            // Trying to authenticate
            if ($this->verifyPassWord($user->getPassword(), $password)) {

                // Set user in the session

                $request->saveUser($user);

                if($user->getRole() == "ROLE_STUDENT"){
                    return $this->redirect($request, "/student/me");  
                }
                if($request->getUser()->getRole() == "ROLE_TEACHER"){
                    return $this->redirect($request, "/teacher/me");  
                }
                if($request->getUser()->getRole() == "ROLE_PARENT"){
                    return $this->redirect($request, "/parent/me");  
                }
                if($request->getUser()->getRole() == "ROLE_CENSOR"){
                    return $this->redirect($request, "/administration/censor");  
                }
                if($request->getUser()->getRole() == "ROLE_INFORMATIC"){
                    return $this->redirect($request, "/administration/InformaticService");  
                }
                
                return $this->redirect($request, "/user/me");
            }

            $errorMsg =  "Identifiants incorrect";
        }


        // Goto section
        sendResponse:
        return $this->render('security/signin.php', [
            "form" => $form->render(),
            'error' => $errorMsg
        ]);
    }

    /**
     * Logout action
     */
    public function logout(Request $request)
    {
        $request->deleteUser();
        return $this->redirect($request, "/");
    }

    /**
     * Register page
     */
    public function register(Request $request): Response
    {

        /*if ($request->getUser()) {
            return $this->redirect($request, "/user/me");
        }*/

        // Hold any error message
        $errorMsg = null;

        // Create the form
        $form = new RegisterForm($request->getUrl());

        // Handle the form and prepare field form
        $form->handle($request);

        if ($form->isSubmitted()) {

            // Check passs correspondance
            $password = $form->get("password");
            $passwordConfirmation = $form->get("password_confirmation");
            if (0 !== strcmp($password, $passwordConfirmation)) {
                $errorMsg = "Les mot de passe ne correspondent pas";
                goto sendResponse;
            }

            // Has password before saving it into database
            $hasedPassword = $this->hashPassword($password);

            // Getting data from the form
            $user = new User();
            $user->setEmail($form->get("email"));
            $user->setName($form->get("name"));
            $user->setPassword($hasedPassword);

            $student = $this->studentRepo->findOneBy(["email" => $form->get("email")]);
            $teacher = $this->teacherRepo->findOneBy(["email" => $form->get("email")]);
            $parent = $this->parentRepo->findOneBy(["email" => $form->get("email")]);
            $censor = $this->censorRepo->findOneBy(["email" => $form->get("email")]);
            $informatic = $this->informaticRepo->findOneBy(["email" => $form->get("email")]);
            if ($student) {
                $user->setRole("ROLE_STUDENT") ;
            }
            if ($teacher) {
                $user->setRole("ROLE_TEACHER") ;
            }
            if ($parent) {
                $user->setRole("ROLE_PARENT") ;
            }
            if ($censor) {
                $user->setRole("ROLE_CENSOR") ;
            }
            if ($informatic) {
                $user->setRole("ROLE_INFORMATIC") ;
            }

            $users = $this->userRepo->findOneBy(["email" => $form->get("email")]) ;
            if($users){
                $errorMsg = "Utilisateur déjà existant";
                goto sendResponse;
            }

            if (!$this->userRepo->create($user)) {
                $errorMsg = "Une erreur empêche votre inscription";
                goto sendResponse;
            }

            return $this->redirect($request, "/login");
        }


        // Goto section
        sendResponse:
        return $this->render('register/signup.php', [
            "form" => $form->render(),
            'error' => $errorMsg
        ]);
    }
}
