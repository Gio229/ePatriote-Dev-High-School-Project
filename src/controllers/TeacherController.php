<?php

namespace App\Controllers;

use App\Entities\ProgInterro;
use App\Forms\ProgInterroForm;
use App\Forms\NoteSelectForm;
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
    public $paRepo;
    public $aslRepo;
    public $apiRepo;
    public $nginxRepo;
    public $htppRepo;



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

           $this->studentTemp = [
                "email" => $form_note_select->get("email"),
                "course" => $form_note_select->get("course"),
            ];


            return $this->note($request, $this->studentTemp);
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

    public function note(Request $request, array $studentTemp): Response
    {
        $i = strtolower($studentTemp['course']) . 'Repo' ;

        return $this->render('teacher/note.php', [
            "user" => $request->getUser(),
            "temp" => $studentTemp,
            "student" => $this->studentRepo->findBy([
                "email" => ["=", $studentTemp['email']]
            ]),
            "details" => $this->$i->findBy([
                "email" => ["=", $studentTemp['email']]
                ])
            //"error" => $errorMsg
        ]);
    }



}
