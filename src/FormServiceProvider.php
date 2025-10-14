<?php

namespace NidhiRajput\Form;

use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Views ko load karenge
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'form');

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');


        // Routes load karenge
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // Config publish karne ka option
        $this->publishes([
            __DIR__.'/../config/form.php' => config_path('form.php'),
        ], 'config');
    }

    public function register()
    {
        // Optional: config merge
        $this->mergeConfigFrom(
            __DIR__.'/../config/form.php', 'form'
        );
    }
}
