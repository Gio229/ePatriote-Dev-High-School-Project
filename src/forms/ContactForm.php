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
class ContactForm extends FormBuilder
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
    
       $this->submitButton->setLabel("Envoyer");

       $newAttr = $this->submitButton->getAttributes();
       $newAttr["class"] = "envoie";
       $this->submitButton->setAttributes($newAttr);

        $this
            ->add("email", EmailField::class, [
                "id" => "email",
                "required" => true,
                "placeholder"=> "\tEntrez votre email ici",
                "class"=> "",
                "label" => "Email"
            ])
            ->add("message", TextAreaField::class, [
                "id" => "message",
                "required" => true,
                "class"=> "",
                "placeholder"=> "\tLaissez-nous un message",
                "label" => "Message"
            ]);
    }
}
