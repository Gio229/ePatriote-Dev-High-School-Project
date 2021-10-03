<?php

namespace App\Forms;

use PhpFromZero\HtmlForms\Field\EmailField;
use PhpFromZero\HtmlForms\Field\SelectField;
use PhpFromZero\HtmlForms\Field\DateField;
use PhpFromZero\HtmlForms\Field\TimeField;
use PhpFromZero\HtmlForms\Field\PasswordField;
use PhpFromZero\HtmlForms\Field\FileField;
use PhpFromZero\HtmlForms\Field\NumberField;
use PhpFromZero\HtmlForms\Field\TextField;
use PhpFromZero\HtmlForms\FormBuilder;


/**
 * TeachingForm form
 * 
 */
class TeachingForm extends FormBuilder
{

    public function __construct(string $action)
    {
        parent::__construct(method: "POST", action: $action, attr: [
            "enctype"=>"multipart/form-data",
            "class" => "form"
        ]);
    }

    /**
     * Build the form
     */
    public function build()
    {
        // Override thing here like, submit button label, form name, form id
        
        $this->submitButton->setLabel("Valider");

        $this
            ->add("classroom", SelectField::class, [
                "id" => "classroom",
                "required" => true,
                "placeholder"=> "\tEntrez la classe",
                "class"=> "",
                "label" => "Classe",
                "options" => [
                    "seconde" => "seconde",
                    "première" => "première",
                    "terminale" => "terminale",
                ]
            ])
            ->add("course", SelectField::class, [
                "id" => "course",
                "required" => true,
                "placeholder"=> "\tEntrez la matière",
                "class"=> "",
                "label" => "Matière",
                "options" => [
                    "PA" => "PA",
                    "API" => "API",
                    "ASL" => "ASL",
                    "Nginx" => "Nginx",
                    "HTPP" => "HTPP",
                ]
            ])
            ->add("mail_teacher", EmailField::class, [
                "id" => "mail_teacher",
                "required" => true,
                "placeholder"=> "\tEntrez le mail",
                "class"=> "",
                "label" => "Email professeur"
            ])
            ->add("option", SelectField::class, [
                "id" => "option",
                "required" => true,
                "class"=> "",
                //"label" => "Mot de passe",
                "options" => [
                    "retirer" => "retirer",
                    "confier" => "confier",
                ]
            ]);
    }
}
