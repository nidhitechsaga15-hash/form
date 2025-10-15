<?php

namespace NidhiRajput\Form;

use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     */
    public function boot()
    {
        // 1️⃣ Views ko load karenge with namespace 'form'
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'form');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'form');


        // 2️⃣ Migrations load karenge
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // 3️⃣ Publishable resources

        // Views publish
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/form'),
        ], 'views');

        // Migrations publish
        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations'),
        ], 'migrations');

        // Config publish
        $this->publishes([
            __DIR__.'/../config/form.php' => config_path('form.php'),
        ], 'config');

        // Routes publish (optional)
        // NOTE: Normally we don't overwrite main web.php, better load routes from package
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

    }

    /**
     * Register any package services.
     */
    public function register()
    {
        // Config merge
        $this->mergeConfigFrom(
            __DIR__.'/../config/form.php', 'form'
        );
    }
}
