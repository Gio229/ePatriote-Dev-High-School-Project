<?php

namespace App\Controllers;

use App\Repositories\ProgInterroRepository;
use App\Repositories\ProgExamRepository;
use App\Repositories\ProgCourseRepository;
use App\Repositories\StudentRepository;
use PhpFromZero\Controller\BaseController;
use PhpFromZero\Http\Request;
use PhpFromZero\Http\Response;



/**
 * Student Controller
 * 
 */
class StudentController extends BaseController
{

    protected $progInterroRepo;
    protected $progExamRepo;
    protected $progCourseRepo;
    protected $studentRepo;

    public function __construct()
    {
        parent::__construct();

        $this->progInterroRepo = new ProgInterroRepository();
        $this->progExamRepo = new ProgExamRepository();
        $this->progCourseRepo = new ProgCourseRepository();
        $this->studentRepo = new StudentRepository();
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


        $studentInfos = $this->studentRepo->findOneBy(["email" => $request->getUser()['email']]);

        return $this->render('student/students.php', [
            "user" => $request->getUser(),
            /*"progInterro" => $this->progInterroRepo->findAll()*/
            "progInterro" => $this->progInterroRepo->findBy([
                                                    "classroom" => ["=", $studentInfos['classroom']], 
                                                    "theDate" => [">=", date("Y-m-d")]
                                                    ],
                                                    ["theDate" => "ASC", "theHour"=> "ASC"]),
            "progExam" => $this->progExamRepo->findBy([
                                                    "classroom" => ["=", $studentInfos['classroom']], 
                                                    "theDate" => [">=", date("Y-m-d")]
                                                    ],
                                                    ["theDate" => "ASC", "theHour"=> "ASC"]),
            "progCourse" => $this->progCourseRepo->findBy([
                                                    "classroom" => ["=", $studentInfos['classroom']], 
                                                    "theDate" => [">=", date("Y-m-d")]
                                                    ],
                                                    ["theDate" => "ASC", "theHour"=> "ASC"])
                                                    
        ]);
    }


    public function myResults(Request $request): Response{

        $errorMsg = null;

        return $this->render('student/myresults.php', [
            "user" => $request->getUser(),
            "error" => $errorMsg
        ]);
    }

}
