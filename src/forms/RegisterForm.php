<?php

namespace App\Forms;

use PhpFromZero\HtmlForms\Field\EmailField;
use PhpFromZero\HtmlForms\Field\PasswordField;
use PhpFromZero\HtmlForms\Field\FileField;
use PhpFromZero\HtmlForms\Field\NumberField;
use PhpFromZero\HtmlForms\Field\TextField;
use PhpFromZero\HtmlForms\FormBuilder;


/**
 * Register form
 * 
 */
class RegisterForm extends FormBuilder
{

    public function __construct(string $action)
    {
        parent::__construct(method: "POST", action: $action, attr: [
            "enctype"=>"multipart/form-data"

        ]);
    }

    /**
     * Build the form
     */
    public function build()
    {
        // Override thing here like, submit button label, form name, form id
        
        $this->submitButton->setLabel("S'inscrire");

        $this
            ->add("email", EmailField::class, [
                "id" => "email",
                "required" => true,
                "placeholder"=> "\tEntrez votre email",
                "class"=> "",
                "label" => "Email"
            ])
            ->add("name", TextField::class, [
                "id" => "name",
                "required" => true,
                "placeholder"=> "\tEntrez votre pseudo",
                "class"=> "",
                "label" => "Pseudo"
            ])
            ->add("password", PasswordField::class, [
                "id" => "password",
                "required" => true,
                "placeholder"=> "\tEntrez votre mot de passe",
                "class"=> "",
                "label" => "Mot de passe"
            ])
            ->add("password_confirmation", PasswordField::class, [
                "id" => "password_confirmation",
                "required" => true,
                "placeholder"=> "\tConfirmez le mot de passe",
                "class"=> "",
                "label" => "Confirmer"
            ]);
    }
}
