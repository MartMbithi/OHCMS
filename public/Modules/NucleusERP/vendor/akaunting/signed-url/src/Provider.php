<?php

namespace Akaunting\SignedUrl;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

use Akaunting\SignedUrl\SignedUrl;

class Provider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     */
    public function boot(Router $router)
    {
        $this->publishes([
            __DIR__ . '/Config/signed-url.php' => config_path('signed-url.php')
        ], 'signed-url');

        $this->app->singleton('signed-url', function () {
            return new SignedUrl();
        });

        $router->aliasMiddleware('signed-url', config('signed-url.middleware'));

        $this->app->alias(SignedUrl::class, 'signed-url');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/Config/signed-url.php', 'signed-url');
    }
}
