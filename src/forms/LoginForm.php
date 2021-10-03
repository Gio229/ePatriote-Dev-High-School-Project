<?php

namespace App\Forms;

use PhpFromZero\HtmlForms\Field\EmailField;
use PhpFromZero\HtmlForms\Field\PasswordField;
use PhpFromZero\HtmlForms\FormBuilder;

/**
 * Login Form
 * 
 */
class LoginForm extends FormBuilder
{

    public function __construct(string $action)
    {
        parent::__construct(method: "POST", action: $action, attr: [
           
            "class"=> "form bg-info"
        ]);
    }

    /**
     * Build the form
     */
    public function build()
    {
    
       $this->submitButton->setLabel("Se connecter");

       $newAttr = $this->submitButton->getAttributes();
       $newAttr["class"] = "envoie";
       $this->submitButton->setAttributes($newAttr);

        $this
            ->add("email", EmailField::class, [
                "id" => "email",
                "required" => true,
                "placeholder"=> "\tEntrez votre email ici",
                "class"=> "",
                "label" => "Email"
            ])
            ->add("password", PasswordField::class, [
                "id" => "password",
                "required" => true,
                "class"=> "",
                "placeholder"=> "\tEntrer votre mot de passe",
                "label" => "Mot de passe"
            ]);
    }
}
