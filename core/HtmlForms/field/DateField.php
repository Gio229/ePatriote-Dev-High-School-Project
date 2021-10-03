<?php

namespace PhpFromZero\HtmlForms\Field;

use PhpFromZero\HtmlForms\Field\FormField;



/**
 * Date form field
 * 
 */
class DateField extends FormField
{

    protected $view;


    public function render(String $name){

        // Retrieve attributes array
        $attributes = $this->getAttributes();

        // A text field has minimum this HTML code
        $this->view = "<tr><td><label>".$attributes['label']."</label></td><td>";
        $this->view .= "<input name='$name' type='date' ";


        // Add all other attributes like class, id, required etc.
        foreach ($attributes as $key => $value) {
            $this->view .=" $key='$value' ";
        }
        
        return $this->view." />";

    }

    /**
     * Cas the value into string
     */
    public static function cast($value){ 
        return (string) $value;
    }
}
