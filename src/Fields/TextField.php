<?php

namespace omidfarahani\laravel_form\Fields;

use omidfarahani\laravel_form\Field;

class TextField extends AbstractField{

    function get_html()
    {
        if( $this->has_view() ){
            return '2';
        }
        else{
            return dirname( dirname( __DIR__ ) ) . '\views\text.blade.php';
        }
    }

    function validate()
    {
        // TODO: Implement validate() method.
    }

}
