<?php

namespace Leolopez\Encrypt;

use Leolopez\Encrypt\Classes\Encrypt;
use Leolopez\Encrypt\Facades\Encrypt as EncryptFacade;
use \Illuminate\Support\ServiceProvider;

class EncryptServiceProvider extends ServiceProvider
{
    /**
    * Bootstrap the application services.
    *
    * @return void
    */
    public function boot()
    {
        // Publishing the assets
        $this->publishes([
            __DIR__.'/Classes/Encrypt.php' => base_path().'/app/Http/Controllers/Encrypt.php',
        ]);
    }

    /**
    * Register the application services.
    *
    * @return void
    */
    public function register()
    {
        // Registering the package
        $this->app->bind('encrypt', Encrypt::class);

        // Registering the facade
        $this->app->alias('Encrypt', EncryptFacade::class);
    }
}
