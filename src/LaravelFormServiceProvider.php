<?php

namespace omidfarahani\laravel_form;

use \Illuminate\Support\ServiceProvider;

class LaravelFormServiceProvider extends ServiceProvider{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        dd( $this );
        $this->loadViewsFrom(__DIR__.'/path/to/views', 'laravel_form');
    }

}
