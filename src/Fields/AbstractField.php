<?php

namespace omidfarahani\laravel_form\Fields;

use omidfarahani\laravel_form\Field;
use omidfarahani\laravel_form\ViewLoader;

abstract Class AbstractField implements Field{

    use ViewLoader;

    public function __construct( $args )
    {
        if( $this->has_view() ){
            $this->view = $this->get_view();
        }
    }

}
