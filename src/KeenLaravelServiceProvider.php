<?php

namespace Wensleydale\KeenLaravel;

use Illuminate\Support\ServiceProvider;
use KeenIO\Client\KeenIOClient;

class KeenLaravelServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Setup configuration publishing.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/KeenConfig.php' => config_path('keen.php')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('KeenIO\Client\KeenIOClient', function($app) {

            $config = $app['config']['keen'];

            return (new KeenIOClient())->factory([
                'projectId' => $config['projectId'],
                'masterKey' => $config['masterKey'],
                'writeKey'  => $config['writeKey'],
                'readKey'   => $config['readKey']
            ]);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['KeenIO\Client\KeenIOClient'];
    }
}
