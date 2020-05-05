<?php

namespace Styde;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/form.php', 'form');

        $this->loadViewsFrom(__DIR__.'/../resources/views/', 'styde-form');

        Blade::component('Styde\Form', 'form');
        Blade::component('Styde\Field', 'field');
    }
}
