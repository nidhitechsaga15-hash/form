<?php

return [

    // ...

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        // ... baki providers

        /*
         * Package Service Providers...
         */
        NidhiRajput\Form\FormServiceProvider::class,  // <-- yahan add karo

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        NidhiRajput\Form\FormServiceProvider::class,


    ],

    // ...
];
