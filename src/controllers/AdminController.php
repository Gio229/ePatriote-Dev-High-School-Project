<?php

namespace App\Controllers;

use App\Entities\ProgExam;
use App\Entities\Student;
use App\Entities\Teaching;
use App\Entities\Parents;
use App\Entities\Censor;
use App\Entities\PA;
use App\Entities\ASL;
use App\Entities\API;
use App\Entities\HTPP;
use App\Entities\NGINX;
use App\Entities\MoySem;
use App\Entities\CourseMoySem;
use App\Forms\ProgExamForm;
use App\Forms\PublicationForm;
use App\Forms\TeachingForm;
use App\Forms\StudentForm;
use App\Forms\StudentAddForm;
use App\Forms\ParentAddForm;
use App\Forms\TeacherAddForm;
use App\Forms\CensorAddForm;
use App\Forms\DeleteMailForm;
use App\Forms\RoleForm;
use App\Repositories\UserRepository;
use App\Repositories\TeachingRepository;
use App\Repositories\ProgExamRepository;
use App\Repositories\ProgCourseRepository;
use App\Repositories\StudentRepository;
use App\Repositories\PARepository;
use App\Repositories\ASLRepository;
use App\Repositories\APIRepository;
use App\Repositories\HTPPRepository;
use App\Repositories\NGINXRepository;
use App\Repositories\MoySemRepository;
use App\Repositories\CourseMoySemRepository;
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
    protected $paRepo;
    protected $aslRepo;
    protected $apiRepo;
    protected $htppRepo;
    protected $nginxRepo;
    protected $moySemRepo;
    protected $courseMoySemRepo;


    public function __construct()
    {
        parent::__construct();

        $this->userRepo = new UserRepository();
        $this->progExamRepo = new ProgExamRepository();
        $this->progCourseRepo = new ProgCourseRepository();
        $this->teachingRepo = new TeachingRepository();
        $this->studentRepo = new StudentRepository();
        $this->paRepo = new PARepository();
        $this->aslRepo = new ASLRepository();
        $this->apiRepo = new APIRepository();
        $this->htppRepo = new HTPPRepository();
        $this->nginxRepo = new NGINXRepository();
        $this->moySemRepo = new MoySemRepository();
        $this->courseMoySemRepo = new CourseMoySemRepository();



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

        $students_add = new StudentAddForm($request->getUrl());
        $teachers_add = new TeacherAddForm($request->getUrl());
        $parents_add = new ParentAddForm($request->getUrl());
        $censors_add = new CensorAddForm($request->getUrl());
        $errorMsg = null;

        // Handle the form and prepare field form
        $students_add->handle($request);
        $teachers_add->handle($request);
        $parents_add->handle($request);
        $censors_add->handle($request);

        if ($students_add->isSubmitted()) {

            //Initialisation of the actors

            $student = new Student();
            
            $student->setClassroom($students_add->get("classroom_s"));
            $student->setFirstName($students_add->get("firstName_s"));
            $student->setLastName($students_add->get("lastName_s"));
            $student->setEmail($students_add->get("email_s"));

            
                $st = null;
                $st = $this->studentRepo->findBy([
                    "email" => ["=", $student->getEmail()], 
                    "classroom" => ["=", $student->getClassroom()], 
                    "firstName" => ["=", $student->getFirstName()], 
                    "lastName" => ["=", $student->getLastName()], 
                    ]);

                if(empty($st) && empty($this->studentRepo->findBy([
                    "email" => ["=", $student->getEmail()], 
                    ]))){
                        
                    if ($this->studentRepo->create($student)) {

                        //Initialisation of the differents entities
                        $pa = new PA();
                        $asl = new ASL();
                        $api = new API();
                        $htpp = new HTPP();
                        $nginx = new NGINX();
                        $moySem = new MoySem();
                        $courseMoySem = new CourseMoySem();

                        //----
                        //adding informations for the course PA
                        $pa->setEmail($student->getEmail());
                        $pa->setClassroom($student->getClassroom());
                        $pa->setSem(1);

                        if ($this->paRepo->create($pa)) {
                            $pa->setSem(2);
                            if(!$this->paRepo->create($pa)){
                            $errorMsg = "Une erreur empêche l'envoie semestre 2";
                            }
                        }else{
                            $errorMsg = "Une erreur empêche l'envoie semestre 1";
                        }
                        //----
                        //adding informations for the course ASL
                        $asl->setEmail($student->getEmail());
                        $asl->setClassroom($student->getClassroom());
                        $asl->setSem(1);

                        if ($this->aslRepo->create($asl)) {
                            $asl->setSem(2);
                            if(!$this->aslRepo->create($asl)){
                            $errorMsg = "Une erreur empêche l'envoie semestre 2";
                            }
                        }else{
                            $errorMsg = "Une erreur empêche l'envoie semestre 1";
                        }

                        //----
                        //adding informations for the course API
                        $api->setEmail($student->getEmail());
                        $api->setClassroom($student->getClassroom());
                        $api->setSem(1);

                        if ($this->apiRepo->create($api)) {
                            $api->setSem(2);
                            if(!$this->apiRepo->create($api)){
                            $errorMsg = "Une erreur empêche l'envoie semestre 2";
                            }
                        }else{
                            $errorMsg = "Une erreur empêche l'envoie semestre 1";
                        }

                        //----
                        //adding informations for the course HTPP
                        $htpp->setEmail($student->getEmail());
                        $htpp->setClassroom($student->getClassroom());
                        $htpp->setSem(1);

                        if ($this->htppRepo->create($htpp)) {
                            $htpp->setSem(2);
                            if(!$this->htppRepo->create($htpp)){
                            $errorMsg = "Une erreur empêche l'envoie semestre 2";
                            }
                        }else{
                            $errorMsg = "Une erreur empêche l'envoie semestre 1";
                        }

                        //----
                        //adding informations for the course Nginx
                        $nginx->setEmail($student->getEmail());
                        $nginx->setClassroom($student->getClassroom());
                        $nginx->setSem(1);

                        if ($this->nginxRepo->create($nginx)) {
                            $nginx->setSem(2);
                            if(!$this->nginxRepo->create($nginx)){
                            $errorMsg = "Une erreur empêche l'envoie semestre 2";
                            }
                        }else{
                            $errorMsg = "Une erreur empêche l'envoie semestre 1";
                        }

                        //adding informations for the students averages per semesters 
                        $moySem->setEmail($student->getEmail());
                        $moySem->setClassroom($student->getClassroom());
                        $moySem->setSem(1);

                        if ($this->moySemRepo->create($moySem)) {
                            $moySem->setSem(2);
                            if(!$this->moySemRepo->create($moySem)){
                            $errorMsg = "Une erreur empêche l'envoie semestre 2";
                            }
                        }else{
                            $errorMsg = "Une erreur empêche l'envoie semestre 1";
                        }


                        
                        //adding informations for the students averages per courses per semesters 
                        
                        $courses = [
                            "PA", "API", "ASL", "Nginx", "HTPP",
                        ];
                        $courseMoySem->setEmail($student->getEmail());
                        $courseMoySem->setClassroom($student->getClassroom());
                        
                        foreach($courses as $cours){
                            $courseMoySem->setSem(1);
                            $courseMoySem->setCourse($cours);
                            if ($this->courseMoySemRepo->create($courseMoySem)) {
                                $courseMoySem->setSem(2);
                                if(!$this->courseMoySemRepo->create($courseMoySem)){
                                $errorMsg = "Une erreur empêche l'envoie semestre 2";
                                }
                            }else{
                                $errorMsg = "Une erreur empêche l'envoie semestre 1";
                            }
                        }

                    }else{
                        $errorMsg = "Une erreur empêche l'envoie";
                    }
                    $st = null;
                }       

        }

        return $this->render('administration/addData.php', [
            "user" => $request->getUser(),
            "students_add" => $students_add->render(),
            "teachers_add" => $teachers_add->render(),
            "parents_add" => $parents_add->render(),
            "censors_add" => $censors_add->render(),
            "error" => $errorMsg
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
    public function results(Request $request): Response
    {

        $form_pub = new PublicationForm($request->getUrl());
        $errorMsg = null;

        // Handle the form and prepare field form
        $form_pub->handle($request);

        return $this->render('administration/results.php', [
            "form_pub" => $form_pub->render(),
            
        ]);
    }

}
