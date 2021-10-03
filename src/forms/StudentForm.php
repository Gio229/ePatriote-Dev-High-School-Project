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
class StudentForm extends FormBuilder
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
        
        $this->submitButton->setLabel("Modifier");

        $this
            ->add("classroom", SelectField::class, [
                "id" => "classroom",
                "required" => true,
                "placeholder"=> "\tEntrez la classe",
                "class"=> "data",
                "label" => "Classe",
                "options" => [
                    "seconde" => "seconde",
                    "première" => "première",
                    "terminale" => "terminale",
                ]
            ])
            ->add("firstName", TextField::class, [
                "id" => "firstName",
                "required" => true,
                "placeholder"=> "",
                "class"=> "data",
                "label" => "Prénom(s)"
            ])
            ->add("lastName", TextField::class, [
                "id" => "lastName",
                "required" => true,
                "placeholder"=> "",
                "class"=> "data",
                "label" => "Nom"
            ])
            ->add("email", EmailField::class, [
                "id" => "email",
                "required" => true,
                "placeholder"=> "\tEntrez votre email",
                "class"=> "data",
                "label" => "Email"
            ]);
    }
}
