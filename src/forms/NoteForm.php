<?php

namespace App\Forms;

use PhpFromZero\HtmlForms\Field\EmailField;
use PhpFromZero\HtmlForms\Field\SelectField;
use PhpFromZero\HtmlForms\Field\DateField;
use PhpFromZero\HtmlForms\Field\TimeField;
use PhpFromZero\HtmlForms\Field\PasswordField;
use PhpFromZero\HtmlForms\Field\FileField;
use PhpFromZero\HtmlForms\Field\NumberField;
use PhpFromZero\HtmlForms\Field\StudentTempField;
use PhpFromZero\HtmlForms\Field\SubmitField;
use PhpFromZero\HtmlForms\Field\TextField;
use PhpFromZero\HtmlForms\FormBuilder;

/**
 * Note Form
 * 
 */
class NoteForm extends FormBuilder
{

    //protected string $email;
    //protected string $course;

    /*public function __construct(string $action, string $email, string $course)
    {
        parent::__construct(method: "POST", action: $action, attr: [   
            "class"=> "nextForm"
        ]);
        $this->email = $email;
        $this->course = $course;
        
    }*/

    public function __construct(
        //protected String $method,
        protected String $action,
        //protected array $attr,
        protected string $email,
        protected string $course
    ) {

        // Form name and it same as the form class name
        $this->id = $this->name = $this->getMyName();

        $this->fields = [];

        // This can be override by the user defined build() method
        $this->submitButtonlabel = "Envoyer";
        $this->submitButtonName = $this->name . "_submit_button";
        $this->submitButtonAttr = ["id" => $this->name . "_submit_button",
                                    "class" => "envoie"];
        $this->submitButton = new SubmitField();
        $this->submitButton->setLabel($this->submitButtonlabel);

        // Build the form
        $this->build();

        // By default form is not submitted
        $this->isSubmitted = false;

        $this->method = "POST";
        $this->action = $action;
        $this->attr = [ 
            "class"=> "nextForm"
        ];
        $this->email = $email;
        $this->course = $course;
    }

    /**
     * Build the form
     */
    public function build()
    {

    
       $this->submitButton->setLabel("Valider");

       $newAttr = $this->submitButton->getAttributes();
       $newAttr["class"] = "envoie";
       $this->submitButton->setAttributes($newAttr);

        $this
            ->add("choice", SelectField::class, [
                "id" => "choice",
                "required" => true,
                "placeholder"=> "",
                "class"=> "data",
                //"label" => "Matière",
                "options" => [
                    "" => "",
                    "interro" => "Interrogation",
                    "dev" => "Devoir"
                ]
            ])
            ->add("number", SelectField::class, [
                "id" => "number",
                "required" => true,
                "placeholder"=> "",
                "class"=> "data",
                //"label" => "Numéro",
                "options" => [
                    "" => "Numéro",
                    "1" => "1",
                    "2" => "2",
                    "3" => "3"
                ]
            ])
            ->add("note", NumberField::class, [
                "id" => "note",
                "required" => true,
                "placeholder"=> "\tNote sur 20",
                "class"=> "",
                //"label" => "Email"
            ])
            ->add("semester", SelectField::class, [
                "id" => "semester",
                "required" => true,
                "placeholder"=> "",
                "class"=> "data",
                //"label" => "Semestre",
                "options" => [
                    "" => "Semestre",
                    "1" => "1",
                    "2" => "2"
                ]
            ])
            ->add("email", StudentTempField::class, [
                "id" => "email",
                "value" => $this->email,
                "required" => true,
                "class"=> "",
                //"label" => "Email"
            ])
            ->add("course", StudentTempField::class, [
                "id" => "course",
                "value" => $this->course,
                "required" => true,
                "class"=> "",
                //"label" => "Email"
            ]);
    }

    public function getEmail()
    {
        return $this->email;
    }

    
    public function setEmail(?String $email)
    {
        if(!empty($email)){
            $this->email = $email;
        }

        return $this;
    }
}
