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
 * ProgExam form
 * 
 */
class ProgExamForm extends FormBuilder
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
        
        $this->submitButton->setLabel("Valider");

        $this
            ->add("classroom", SelectField::class, [
                "id" => "classroom",
                //"required" => true,
                "placeholder"=> "\tEntrez la classe",
                "class"=> "data",
                "label" => "Classe",
                "options" => [
                    "seconde" => "seconde",
                    "première" => "première",
                    "terminale" => "terminale",
                ]
            ])
            ->add("theDate", DateField::class, [
                "id" => "theDate",
                //"required" => true,
                "placeholder"=> "\tEntrez la date",
                "class"=> "data",
                "label" => "Date"
            ])
            ->add("theHour", TimeField::class, [
                "id" => "theHour",
                //"required" => true,
                "placeholder"=> "\tHeure prévue",
                "class"=> "data",
                "label" => "Heure"
            ])
            ->add("course", SelectField::class, [
                "id" => "course",
                //"required" => true,
                "placeholder"=> "\tEntrez la matière",
                "class"=> "data",
                "label" => "Matière",
                "options" => [
                    "PA" => "PA",
                    "API" => "API",
                    "ASL" => "ASL",
                    "Nginx" => "Nginx",
                    "HTPP" => "HTPP",
                ]
            ])
            ->add("course-exam", SelectField::class, [
                "id" => "course-exam",
                //"required" => true,
                "class"=> "data",
                "label" => "Il d'agit d'un",
                "options" => [
                    "course" => "cours",
                    "exam" => "devoirs",
                ]
            ]);
    }
}
