<?php

namespace omidfarahani\laravel_form;

Interface Field{
    function get_html();

    function validate();
}