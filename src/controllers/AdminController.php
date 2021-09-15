<?php

namespace App\Controllers;

use App\Repositories\UserRepository;
use PhpFromZero\Controller\BaseController;
use PhpFromZero\Http\Request;
use PhpFromZero\Http\Response;

/**
 * Admin Controller
 * 
 */
class AdminController extends BaseController
{


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


    /**
     * View censor page
     * 
     * @param Request $request
     * 
     * @return Response
     */
    public function censor(Request $request): Response
    {
        return $this->render('administration/censor.php', [
            "user" => $request->getUser()
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
