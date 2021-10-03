<?php

namespace App\Controllers;

use App\Entities\ProgInterro;
use App\Forms\ProgInterroForm;
use App\Repositories\UserRepository;
use App\Repositories\TeachingRepository;
use App\Repositories\StudentRepository;
use App\Repositories\ProgInterroRepository;
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



    public function __construct()
    {
        parent::__construct();

        $this->progInterroRepo = new ProgInterroRepository();
        $this->studentRepo = new StudentRepository();
        $this->teachingRepo = new TeachingRepository();


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


}
