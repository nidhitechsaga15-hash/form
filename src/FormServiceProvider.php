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

        $customRoutes = base_path('routes/form.php');
        if (file_exists($customRoutes)) {
            $this->loadRoutesFrom($customRoutes);
        }

        $this->publishes([
                __DIR__ . '/../database/migrations/' => database_path('migrations'),
            ], 'migrations');


            $this->publishes([
                __DIR__ . '/../Http/Controllers' => app_path('Http/Controllers/FormController'),
            ], 'controllers');

        // Routes load karenge
        // $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // Config publish karne ka option
        $this->publishes([
            __DIR__.'/../config/form.php' => config_path('form.php'),
        ], 'config');

         $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/form'),
        ], 'views');

            $this->publishes([
                __DIR__ . '/../routes/web.php' => base_path('routes/web.php'),
            ], 'routes');
                }

    public function register()
    {
        // Optional: config merge
        $this->mergeConfigFrom(
            __DIR__.'/../config/form.php', 'form'
        );
    }
}
