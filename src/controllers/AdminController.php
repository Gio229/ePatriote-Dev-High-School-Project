<?php

namespace App\Controllers;

use App\Entities\ProgExam;
use App\Entities\Student;
use App\Entities\Teaching;
use App\Forms\ProgExamForm;
use App\Forms\TeachingForm;
use App\Forms\StudentForm;
use App\Forms\DeleteMailForm;
use App\Forms\RoleForm;
use App\Repositories\UserRepository;
use App\Repositories\TeachingRepository;
use App\Repositories\ProgExamRepository;
use App\Repositories\ProgCourseRepository;
use App\Repositories\StudentRepository;
use PhpFromZero\Controller\BaseController;
use PhpFromZero\Http\Request;
use PhpFromZero\Http\Response;

/**
 * Admin Controller
 * 
 */
class AdminController extends BaseController
{

    protected $progExamRepo;
    protected $progCourseRepo;
    protected $teachingRepo;
    protected $userRepo;
    protected $studentRepo;


    public function __construct()
    {
        parent::__construct();

        $this->userRepo = new UserRepository();
        $this->progExamRepo = new ProgExamRepository();
        $this->progCourseRepo = new ProgCourseRepository();
        $this->teachingRepo = new TeachingRepository();
        $this->studentRepo = new StudentRepository();



    }


    /**
     * View informatic service page
     * 
     * @param Request $request
     * 
     * @return Response
     */
    public function informaticService(Request $request): Response
    {
        return $this->render('administration/InformaticService.php', [
            "user" => $request->getUser()
        ]);
    }


    public function informaticService_censorManagement(Request $request): Response{

        $form_role = new RoleForm($request->getUrl());
        $errorMsg = null;

        // Handle the form and prepare field form
        $form_role->handle($request);

        if ($form_role->isSubmitted()) {

            $email = $form_role->get("email");
            $option = $form_role->get("option");
            $user = $this->userRepo->findOneBy(["email" => $email]);

            if(!$user){
                $errorMsg = "Utilisateur non existant";
            }
            if($option == "accorder"){
                $user->setRole("ROLE_CENSOR");
                if (!$this->userRepo->update($user)) {
                    $errorMsg = "Une erreur empêche la mise à jour";
                }
            }

            if($option == "retirer"){
                $user->setRole(null);
                if (!$this->userRepo->update($user)) {
                    $errorMsg = "Une erreur empêche la mise à jour";
                }
            } 

        }

        return $this->render('administration/censorManagement.php', [
            "user" => $request->getUser(),
            "form_role" => $form_role->render(),
            "error" => $errorMsg
        ]);
    }

    /**
     * View the page to add data of school informations
     * 
     * @param Request $request
     * 
     * @return Response
     */
    public function addData(Request $request): Response
    {
        return $this->render('administration/addData.php', [
            "user" => $request->getUser(),
        ]);
    }

//-------------------------------------------------------------------------------------------------
    /**
     * View censor page
     * 
     * @param Request $request
     * 
     * @return Response
     */
    public function censor(Request $request): Response{

        $form_progExam = new ProgExamForm($request->getUrl());
        $errorMsg = null;

        // Handle the form and prepare field form
        $form_progExam->handle($request);

        if ($form_progExam->isSubmitted()) {

            $progExam = new ProgExam();
            
            $progExam->setClassroom($form_progExam->get("classroom"));
            $progExam->setTheDate($form_progExam->get("theDate"));
            $progExam->setTheHour($form_progExam->get("theHour"));
            $progExam->setCourse($form_progExam->get("course"));

            if($form_progExam->get("course-exam") == "exam"){
                $prog = null;
                $prog = $this->progExamRepo->findBy([
                    "classroom" => ["=", $progExam->getClassroom()], 
                    "course" => ["=", $progExam->getCourse()], 
                    "theHour" => ["=", $progExam->getTheHour()], 
                    "theDate" => ["=", $progExam->getTheDate()]
                    ]);

                if(empty($prog)){
                        
                    if (!$this->progExamRepo->create($progExam)) {
                        $errorMsg = "Une erreur empêche l'envoie";
                    }
                    $prog = null;
                }    
            }
            
            if($form_progExam->get("course-exam") == "course"){
                $prog = null;
                $prog = $this->progCourseRepo->findBy([
                    "classroom" => ["=", $progExam->getClassroom()], 
                    "course" => ["=", $progExam->getCourse()], 
                    "theHour" => ["=", $progExam->getTheHour()], 
                    "theDate" => ["=", $progExam->getTheDate()]
                    ]);
                    
                if(empty($prog)){
                    if (!$this->progCourseRepo->create($progExam)) {
                        $errorMsg = "Une erreur empêche l'envoie";
                    }
                    $prog = null;
                }
               
            }
            
            
        }

        return $this->render('administration/censor.php', [
            "user" => $request->getUser(),
            "form_progExam" => $form_progExam->render(),
            "error" => $errorMsg
        ]);
    }

    public function censor_teacherManagement(Request $request): Response{

        $form_teaching = new TeachingForm($request->getUrl());
        $errorMsg = null;

        // Handle the form and prepare field form
        $form_teaching->handle($request);

        if ($form_teaching->isSubmitted()) {

            $teaching = new Teaching();
            $teaching->setClassroom($form_teaching->get("classroom"));
            $teaching->setCourse($form_teaching->get("course"));
            $teaching->setEmail_teacher($form_teaching->get("mail_teacher"));

            $option = $form_teaching->get("option");
            if($option == "confier"){

                $validate = null;
                $validate = $this->teachingRepo->findBy([
                    "classroom" => ["=", $teaching->getClassroom()], 
                    "course" => ["=", $teaching->getCourse()], 
                    "email_teacher" => ["=", $teaching->getEmail_teacher()]
                    ]);

                    if(empty($validate)){  
                        if (!$this->teachingRepo->create($teaching)) {
                            $errorMsg = "Une erreur empêche l'envoie";
                        }
                        $prog = null;
                }

            }

            if($option == "retirer"){
                
            }
            
        }

        $form_role = new RoleForm($request->getUrl());
        $errorMsg = null;

        // Handle the form and prepare field form
        $form_role->handle($request);

        if ($form_role->isSubmitted()) {

            $email = $form_role->get("email");
            $option = $form_role->get("option");
            $user = $this->userRepo->findOneBy(["email" => $email]);

            if(!$user){
                $errorMsg = "Utilisateur non existant";
            }
            if($option == "accorder"){
                $user->setRole("ROLE_TEACHER");
                if (!$this->userRepo->update($user)) {
                    $errorMsg = "Une erreur empêche la mise à jour";
                }
            }

            if($option == "retirer"){
                $user->setRole(null);
                if (!$this->userRepo->update($user)) {
                    $errorMsg = "Une erreur empêche la mise à jour";
                }
            }

            

        }

        return $this->render('administration/teacherManagement.php', [
            "user" => $request->getUser(),
            "form_teaching" => $form_teaching->render(),
            "form_role" => $form_role->render(),
            "error" => $errorMsg
        ]);
    }

    public function censor_parentManagement(Request $request): Response{

        $form_role = new RoleForm($request->getUrl());
        $errorMsg = null;

        // Handle the form and prepare field form
        $form_role->handle($request);

        if ($form_role->isSubmitted()) {

            $email = $form_role->get("email");
            $option = $form_role->get("option");
            $user = $this->userRepo->findOneBy(["email" => $email]);

            if(!$user){
                $errorMsg = "Utilisateur non existant";
            }
            if($option == "accorder"){
                $user->setRole("ROLE_PARENT");
                if (!$this->userRepo->update($user)) {
                    $errorMsg = "Une erreur empêche la mise à jour";
                }
            }

            if($option == "retirer"){
                $user->setRole(null);
                if (!$this->userRepo->update($user)) {
                    $errorMsg = "Une erreur empêche la mise à jour";
                }
            } 

        }

        return $this->render('administration/parentManagement.php', [
            "user" => $request->getUser(),
            "form_role" => $form_role->render(),
            "error" => $errorMsg
        ]);
    }

    public function censor_studentManagement(Request $request): Response{

        $form_student_edit = new StudentForm($request->getUrl());
        $form_student_delete = new DeleteMailForm($request->getUrl());
        $errorMsg = null;

        // Handle the form and prepare field form
        $form_student_edit->handle($request);
        $form_student_delete->handle($request);

        if ($form_student_edit->isSubmitted()) {
            if($form_student_edit->get("email")){

                $newStudent = new Student();
                $newStudent->setClassroom($form_student_edit->get("classroom"));
                $newStudent->setFirstName($form_student_edit->get("firstName"));
                $newStudent->setLastName($form_student_edit->get("lastName"));
                $newStudent->setEmail($form_student_edit->get("email"));

                if($lastStudent = $this->studentRepo->findOneBy(["email" => $form_student_edit->get("email")])){
                    
                    $newStudent->setId($lastStudent->getId());
                    if (!$this->studentRepo->update($newStudent)) {
                        $errorMsg = "Une erreur empêche la modification";
                    }
                }else{
                    $errorMsg = "n'existe pas";
                }

                

            }
            

        }

        if ($form_student_delete->isSubmitted()) {

            if($form_student_delete->get("emaile")){
                if (!$this->studentRepo->deleteByMail($form_student_delete->get("emaile"), "email")) {
                    $errorMsg = "Une erreur empêche la suppression";
                }
            }
            

        }

        return $this->render('administration/studentManagement.php', [
            "user" => $request->getUser(),
            "students" => $this->studentRepo->findAll(),
            "form_student_edit" => $form_student_edit->render(),
            "form_student_delete" => $form_student_delete->render(),
            "error" => $errorMsg
        ]);
    }

    /**
     * View edit page
     * 
     * @param Request $request
     * 
     * @return Response
     */
    public function editEleve(Request $request): Response
    {
        return $this->render('administration/editEleve.php', [
            
        ]);
    }

}
