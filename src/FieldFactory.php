<?php

namespace omidfarahani\laravel_form;

class FieldFactory{

    public static function build( $args ){

        $defaults = [
            'type'  => 'text'
        ];

        $args = array_merge( $defaults, $args );

        $class_name = "omidfarahani\laravel_form\Fields\\" . ucfirst( strtolower( $args['type'] ) ) . 'Field';

        if( class_exists( $class_name ) ){
            return new $class_name( $args );
        }
        else{
            throw new \Exception("No class defined for '{$args['type']}' form field");
        }

    }

}
