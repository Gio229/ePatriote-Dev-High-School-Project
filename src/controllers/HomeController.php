<?php

namespace App\Controllers;

use App\Forms\ContactForm;
use App\Repositories\MessageRepository;
use App\Repositories\UserRepository;
use PhpFromZero\Controller\BaseController;
use PhpFromZero\Http\Request;
use PhpFromZero\Http\Response;

/**
 * Home Controller
 * 
 */
class HomeController extends BaseController
{

    // User repository
    protected $userRepo;

    // Message repository
    protected $messageRepo;


    public function __construct()
    {
        parent::__construct();
        
        $this->userRepo = new UserRepository();
        $this->messageRepo = new MessageRepository();
    }


    /**
     * Display last 10 message
     * 
     * @param Request $request The HTTP request object
     * 
     * @return Response The HTTP response
     */
    public function index(Request $request): Response
    {
        return $this->render('home/home.php', []);
    }



    /**
     * Render our abouts page
     */
    public function about(Request $request)
    {
        return $this->render('home/abouts.php', []);
    }

    /**
     * Render our contacts page
     */
    public function contacts(Request $request): Response
    {

        $form = new ContactForm($request->getUrl());
        $errorMsg = null;


        // Handle the form and prepare field form
        $form->handle($request);

        if ($form->isSubmitted()) {

            // Get data from the form
            $email = $form->get("email");

            $to = "aagmaougnon@gmail.com";
            $subject = "Utilisation de mail() avec php";
            $message = $form->get("message");

            $headers = "Content-Type: text/plain; charset=utf-8\r\n";
            $headers .= "From: " . $email . "\r\n";

            if(mail($to, $subject, $message, $headers)){
                $errorMsg = 'Envoyé!' ;
            }else{
                $errorMsg = 'NON Envoyé!' ;
            }

        }
        
        return $this->render('home/contacts.php', [
            "form" => $form->render(),
            'error' => $errorMsg
        ]);
    }
}
