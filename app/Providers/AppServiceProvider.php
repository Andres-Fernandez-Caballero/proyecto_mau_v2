<?php

namespace App\Providers;

use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // configuracion para url seguras en servidor
        if(env('REDIRECT_HTTPS')){
            $this->app['request']->server->set('HTTPS',true);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {
        
        // configuracion para url seguras en servidor
        if(env('REDIRECT_HTTPS')){
            $url->formatScheme('https//');
        }
        
    }
}
