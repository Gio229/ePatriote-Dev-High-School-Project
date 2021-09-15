<?php

namespace App\Controllers;

use App\Repositories\UserRepository;
use PhpFromZero\Controller\BaseController;
use PhpFromZero\Http\Request;
use PhpFromZero\Http\Response;

/**
 * Parent Controller
 * 
 */
class ParentController extends BaseController
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
        return $this->render('parents/parents.php', [
            "user" => $request->getUser()
        ]);
    }


}
