<?php

namespace App\Controllers;

use App\Repositories\UserRepository;
use PhpFromZero\Controller\BaseController;
use PhpFromZero\Http\Request;
use PhpFromZero\Http\Response;

/**
 * Teacher Controller
 * 
 */
class TeacherController extends BaseController
{


    /**
     * View my own home page
     * 
     * @param Request $request
     * 
     * @return Response
     */
    public function index(Request $request): Response
    {
        return $this->render('teacher/teachers.php', [
            "user" => $request->getUser()
        ]);
    }


}
