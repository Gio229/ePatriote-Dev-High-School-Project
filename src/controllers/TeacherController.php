<?php

namespace App\Controllers;

use App\Entities\ProgInterro;
use App\Entities\API;
use App\Entities\ASL;
use App\Entities\PA;
use App\Entities\HTPP;
use App\Entities\NGINX;
use App\Forms\ProgInterroForm;
use App\Forms\NoteSelectForm;
use App\Forms\NoteForm;
use App\Repositories\UserRepository;
use App\Repositories\TeachingRepository;
use App\Repositories\StudentRepository;
use App\Repositories\StudentTempRepository;
use App\Repositories\ProgInterroRepository;
use App\Repositories\PARepository;
use App\Repositories\APIRepository;
use App\Repositories\NGINXRepository;
use App\Repositories\HTPPRepository;
use App\Repositories\ASLRepository;
use App\Repositories\CourseMoySemRepository;
use App\Repositories\MoySemRepository;
use PhpFromZero\Controller\BaseController;
use PhpFromZero\Http\Request;
use PhpFromZero\Http\Response;

/**
 * Teacher Controller
 * 
 */
class TeacherController extends BaseController
{


    protected $progInterroRepo;
    protected $studentRepo;
    protected $teachingRepo;
    protected $paRepo;
    protected $aslRepo;
    protected $apiRepo;
    protected $nginxRepo;
    protected $htppRepo;
    protected $courseMoySemRepo;
    protected $moySemRepo;
    protected $studentTemp;


    public function __construct()
    {
        parent::__construct();

        $this->progInterroRepo = new ProgInterroRepository();
        $this->studentRepo = new StudentRepository();
        $this->teachingRepo = new TeachingRepository();
        $this->paRepo = new PARepository();
        $this->aslRepo = new ASLRepository();
        $this->nginxRepo = new NGINXRepository();
        $this->apiRepo = new APIRepository();
        $this->htppRepo = new HTPPRepository();
        $this->courseMoySemRepo = new CourseMoySemRepository();
        $this->moySemRepo = new MoySemRepository();
        $this->studentTemp['email'] = null;
        $this->studentTemp['course'] = null;

    }


    /**
     * View my own home page
     * 
     * @param Request $request
     * 
     * @return Response
     */
    public function index(Request $request): Response
    {

        $form_progInterro = new ProgInterroForm($request->getUrl());
        $errorMsg = null;

        // Handle the form and prepare field form
        $form_progInterro->handle($request);

        if ($form_progInterro->isSubmitted()) {

            $progInterro = new ProgInterro();
            $progInterro->setClassroom($form_progInterro->get("classroom"));
            $progInterro->setTheDate($form_progInterro->get("theDate"));
            $progInterro->setTheHour($form_progInterro->get("theHour"));
            $progInterro->setCourse($form_progInterro->get("course"));

            if (!$this->progInterroRepo->create($progInterro)) {
                $errorMsg = "Une erreur empêche l'envoie";
            }
        }

        $teachingInfos = $this->teachingRepo->findColBy(["classroom"],[
            "email_teacher" => ["=",$request->getUser()['email']]
            ]);

        

        return $this->render('teacher/teachers.php', [
            "user" => $request->getUser(),
            "teachingInfos" => $teachingInfos,
            "form_progInterro" => $form_progInterro->render(),
            "students" => $this->studentRepo->findAll(),
            "error" => $errorMsg
        ]);
    }

    public function note_select(Request $request): Response
    {
        $form_note_select = new NoteSelectForm($request->getUrl());

        $errorMsg = null;

        // Handle the form and prepare field form
        $form_note_select->handle($request);

        if ($form_note_select->isSubmitted()) {


            $this->setStudentTemp('email', $form_note_select->get("email"));
            $this->setStudentTemp('course', $form_note_select->get("course"));


            return $this->note($request);
        }


        $teachingInfos = $this->teachingRepo->findColBy(["classroom"],[
            "email_teacher" => ["=",$request->getUser()['email']]
            ]);

        return $this->render('teacher/noteSelect.php', [
            "user" => $request->getUser(),
            "form_note_select" => $form_note_select->render(),
            "teachingInfos" => $teachingInfos,
            "students" => $this->studentRepo->findAll(),
            "error" => $errorMsg
        ]);
    }


    //test note
    public function note(Request $request): Response
    {
        $i = strtolower($this->getStudentTemp()['course']) . 'Repo' ;
        //$u = strtoupper($this->getStudentTemp()['course']);
        $form_note = new NoteForm(action: $request->getUrl(), email: $this->getStudentTemp()['email'], course: $this->getStudentTemp()['course']);

        // Handle the form and prepare field form
        $form_note->handle($request);

        $errorMsg = null;


        if ($form_note->isSubmitted()) {
            
            $choice = $form_note->get("choice");
            $number = $form_note->get("number");
            $note = $form_note->get("note");
            $semester = $form_note->get("semester");

            $note_infos = $this->$i->findBy([
                "email" => ["=", $this->getStudentTemp()['email']],
                "sem" => ["=", $semester]
            ]);
            $note_info = $note_infos[0];
            //----
            $courseMoySems = $this->courseMoySemRepo->findBy([
                "email" => ["=", $this->getStudentTemp()['email']],
                "course" => ["=", $this->getStudentTemp()['course']],
                "sem" => ["=", $semester]
            ]);
            $courseMoySem = $courseMoySems[0];

            $coursesMoy = $this->courseMoySemRepo->findBy([
                "email" => ["=", $this->getStudentTemp()['email']],
                "sem" => ["=", $semester]
            ]);
            //----
            $moySems = $this->moySemRepo->findBy([
                "email" => ["=", $this->getStudentTemp()['email']],
                "sem" => ["=", $semester]
            ]);
            $moySem = $moySems[0];




            if($choice == "interro"){
                if($number == 1){
                    $note_info->setNi1($note);
                    $mi = ( $note_info->getNi1() + $note_info->getNi2()+ $note_info->getNi3() ) / 3 ;
                    $note_info->setMi($mi);
                }elseif($number == 2){
                    $note_info->setNi2($note);
                    $mi = ( $note_info->getNi1() + $note_info->getNi2()+ $note_info->getNi3() ) / 3 ;
                    $note_info->setMi($mi);
                }elseif($number == 3){
                    $note_info->setNi3($note);
                    $mi = ( $note_info->getNi1() + $note_info->getNi2()+ $note_info->getNi3() ) / 3 ;
                    $note_info->setMi($mi);
                }else{

                }

                if ($this->$i->update($note_info)) {
                    $av = ( $note_info->getMi() + $note_info->getMd() ) / 2;
                    $courseMoySem->setAverage($av);

                    if ($this->courseMoySemRepo->update($courseMoySem)) {
                        $moy = 0 ;
                        foreach($coursesMoy as $moyCourse){
                            $moy += $moyCourse->getAverage();
                        }
                        //$moy / count($coursesMoy);
                        $moySem->setAverage($moy / count($coursesMoy));
                        if (!$this->moySemRepo->update($moySem)) {
                            $errorMsg = "Une erreur empêche la modification";
                        }
                        
                    }else{
                        $errorMsg = "Une erreur empêche la modification";
                    }
                }else{
                    $errorMsg = "Une erreur empêche la modification";
                }
                    
            }elseif($choice == "dev"){
                if($number == 1){
                    $note_info->setNd1($note);
                    $md = ( $note_info->getNd1() + $note_info->getNd2() ) / 2 ;
                    $note_info->setMd($md);
                }elseif($number == 2){
                    $note_info->setNd2($note);
                    $md = ( $note_info->getNd1() + $note_info->getNd2() ) / 2 ;
                    $note_info->setMd($md);
                }else{

                }

                if ($this->$i->update($note_info)) {
                    $av = ( $note_info->getMi() + $note_info->getMd() ) / 2;
                    $courseMoySem->setAverage($av);

                    if ($this->courseMoySemRepo->update($courseMoySem)) {
                        $moy = 0 ;
                        foreach($coursesMoy as $moyCourse){
                            $moy += $moyCourse->getAverage();
                        }

                        $moySem->setAverage($moy / count($coursesMoy));
                        if (!$this->moySemRepo->update($moySem)) {
                            $errorMsg = "Une erreur empêche la modification";
                        }
                    }else{
                        $errorMsg = "Une erreur empêche la modification";
                    }
                }else{
                    $errorMsg = "Une erreur empêche la modification";
                }
            }

        }

        

        return $this->render('teacher/note.php', [
            "user" => $request->getUser(),
            "temp" => $this->getStudentTemp(),
            "req" => $request,
            "student" => $this->studentRepo->findBy([
                "email" => ["=", $this->getStudentTemp()['email']]
            ]),
            "details" => $this->$i->findBy([
                "email" => ["=", $this->getStudentTemp()['email']]
            ]),
            "form_note" => $form_note->render(),
            "error" => $errorMsg
        ]);
    }

    public function getStudentTemp()
    {
        return $this->studentTemp;
    }

    
    public function setStudentTemp(?String $key, ?String $value)
    {
        if(!empty($key) && !empty($value)){
            $this->studentTemp[$key] = $value;
        }

        return $this;
    }



}
