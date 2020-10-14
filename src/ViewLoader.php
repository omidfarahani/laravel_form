<?php

namespace omidfarahani\laravel_form;

Trait ViewLoader{

    function has_view()
    {
        return FALSE;
    }

    function get_view()
    {
        return 'defr';
    }

}
