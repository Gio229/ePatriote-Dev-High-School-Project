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
 * TeacherAddForm form
 * 
 */
class TeacherAddForm extends FormBuilder
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
        
        $this->submitButton->setLabel("Ajouter");

        $this
            ->add("firstName_t", TextField::class, [
                "id" => "firstName_t",
                "required" => true,
                "placeholder"=> "",
                "class"=> "data",
                "label" => "Prénom(s)"
            ])
            ->add("lastName_t", TextField::class, [
                "id" => "lastName_t",
                "required" => true,
                "placeholder"=> "",
                "class"=> "data",
                "label" => "Nom"
            ])
            ->add("email_t", EmailField::class, [
                "id" => "email_t",
                "required" => true,
                "placeholder"=> "\tEntrez votre email",
                "class"=> "data",
                "label" => "Email"
            ]);
    }
}
