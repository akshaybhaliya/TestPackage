<?php

namespace Garage\TestPackage;

use Illuminate\Support\ServiceProvider;

class TestPackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Merge config
        $this->mergeConfigFrom(
            __DIR__.'/../config/test-package.php', 'test-package'
        );
        $this->app->bind('helloworld', function($app) {
            return new Helloworld();
        });

        $this->mergeConfigFrom(__DIR__.'/../config/twilio.php', 'twilio');
        
    }

    public function boot()
    {
        // Config
        $this->publishes([
            __DIR__.'/../config/test-package.php' => config_path('test-package.php')
        ], 'test-package-config');

        $this->publishes([
            __DIR__.'/../config/twilio.php' => config_path('twilio.php'),
        ], 'config');

        // Views
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/test-package')
        ], 'test-package-views');

        // Publishing assets
        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/test-package'),
        ], 'assets');

        // Load views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'test-package');

        // Load routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        /**
     * Get the services provided by the provider.
     *
     * @return array
     */
  
    }
}