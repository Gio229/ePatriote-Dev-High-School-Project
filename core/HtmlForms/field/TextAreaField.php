<?php

namespace PhpFromZero\HtmlForms\Field;

use PhpFromZero\HtmlForms\Field\FormField;

/**
 * TextArea form field
 * 
 * @author Justin Dah-kenangnon <dah.kenangnon@gmail.com>
 * 
 * @link https://github.com/Dahkenangnon
 * @link https://ePatriote.com
 * @link https://Creative.ePatriote.com
 */
class TextAreaField extends FormField
{
 
    protected $view;


    public function render(String $name){

        // Retrieve attributes array
        $attributes = $this->getAttributes();

        // A text field has minimum this HTML code
        $this->view = "<tr><td><label>".$attributes['label']."</label></td><td>";
        $this->view .= "<textarea name='$name' type='password' ";

        // Add all other attributes like class, id, required etc.
        foreach ($attributes as $key => $value) {
            $this->view .=" $key='$value' ";
        }
        
        return $this->view." /></textarea></td></tr>";
    }


     public static function cast($value){
        return (string) $value;
     }
        

}
