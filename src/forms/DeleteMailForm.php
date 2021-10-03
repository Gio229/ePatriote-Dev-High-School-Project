<?php

namespace App\Forms;

use PhpFromZero\HtmlForms\Field\EmailField;
use PhpFromZero\HtmlForms\Field\TextAreaField;
use PhpFromZero\HtmlForms\Field\PasswordField;
use PhpFromZero\HtmlForms\FormBuilder;

/**
 * Login Form
 * 
 */
class DeleteMailForm extends FormBuilder
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
    
       $this->submitButton->setLabel("Supprimer");

       $newAttr = $this->submitButton->getAttributes();
       $newAttr["class"] = "envoie";
       $this->submitButton->setAttributes($newAttr);

        $this
            ->add("emaile", EmailField::class, [
                "id" => "emaile",
                "required" => true,
                "placeholder"=> "\tEntrez votre email ici",
                "class"=> "",
                "label" => "Email"
            ])
            ;
    }
}
