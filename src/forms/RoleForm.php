<?php

namespace App\Forms;

use PhpFromZero\HtmlForms\Field\EmailField;
use PhpFromZero\HtmlForms\Field\PasswordField;
use PhpFromZero\HtmlForms\Field\SelectField;
use PhpFromZero\HtmlForms\FormBuilder;

/**
 * Login Form
 * 
 */
class RoleForm extends FormBuilder
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
            ->add("email", EmailField::class, [
                "id" => "email",
                "required" => true,
                "placeholder"=> "\tEntrez votre email ici",
                "class"=> "",
                //"label" => "Email"
            ])
            ->add("option", SelectField::class, [
                "id" => "option",
                "required" => true,
                "class"=> "",
                //"label" => "Mot de passe",
                "options" => [
                    "retirer" => "retirer",
                    "accorder" => "accorder",
                ]
            ]);
    }
}
