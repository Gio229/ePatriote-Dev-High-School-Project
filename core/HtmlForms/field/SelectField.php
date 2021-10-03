<?php

namespace PhpFromZero\HtmlForms\Field;

use PhpFromZero\HtmlForms\Field\FormField;



/**
 * select form field
 * 
 */
class SelectField extends FormField
{

    protected $view;


    public function render(String $name){

        // Retrieve attributes array
        $attributes = $this->getAttributes();

        // A text field has minimum this HTML code
        $this->view = "<tr><td><label>".$attributes['label']."</label></td><td>";
        $this->view .= "<select name='$name' type='text' ";


        // Add all other attributes like class, id, required etc.
        foreach ($attributes as $key => $value) {
            $this->view .=" $key='$value' ";
        }

        $this->view .= ">";

        //add select options

        foreach ($attributes['options'] as $option => $option_value) {
            $this->view .="<option value = '$option'>$option_value</option>";
        }
        
        return $this->view."</select>";

    }

    /**
     * Cas the value into string
     */
    public static function cast($value){ 
        return (string) $value;
    }
}
