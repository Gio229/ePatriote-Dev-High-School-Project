<?php

namespace App\Forms;

use PhpFromZero\HtmlForms\Field\EmailField;
use PhpFromZero\HtmlForms\Field\PasswordField;
use PhpFromZero\HtmlForms\Field\SelectField;
use PhpFromZero\HtmlForms\FormBuilder;

/**
 * Publication Form
 * 
 */
class PublicationForm extends FormBuilder
{

    public function __construct(string $action)
    {
        parent::__construct(method: "POST", action: $action, attr: [
           
            "class"=> " "
        ]);
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
            ->add("course", SelectField::class, [
                "id" => "course",
                //"required" => true,
                "placeholder"=> "\tEntrez la matière",
                "class"=> "data",
                //"label" => "Matière",
                "options" => [
                    "" => "",
                    "sem1" => "Resultats du semestre 1",
                    "sem2" => "Resultats du semestre 2",
                    "year" => "Resultats annuels",
                ]
            ]);
    }
}
