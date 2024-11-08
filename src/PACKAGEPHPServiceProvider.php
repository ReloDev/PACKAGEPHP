<?php

namespace PACKAGEPHP;

use Illuminate\Support\ServiceProvider;

class PACKAGEPHPServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Bonjour::class, function () {
            return new Bonjour();
        });

        $this->app->singleton(Calcul::class, function () {
            return new Calcul();
        });
    }

    public function boot()
    {
        // Code pour démarrer le package (si nécessaire)
    }
}
