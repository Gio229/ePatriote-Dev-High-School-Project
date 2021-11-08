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
 * ParentAddForm form
 * 
 */
class ParentAddForm extends FormBuilder
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
            ->add("firstName_p", TextField::class, [
                "id" => "firstName_p",
                "required" => true,
                "placeholder"=> "",
                "class"=> "data",
                "label" => "Prénom(s)"
            ])
            ->add("lastName_p", TextField::class, [
                "id" => "lastName_p",
                "required" => true,
                "placeholder"=> "",
                "class"=> "data",
                "label" => "Nom"
            ])
            ->add("email_p", EmailField::class, [
                "id" => "email_p",
                "required" => true,
                "placeholder"=> "\tEntrez votre email",
                "class"=> "data",
                "label" => "Email"
            ]);
    }
}
