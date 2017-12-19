<?php

namespace SparrowSDK\Laravel;

use SparrowSDK\SparrowServiceClient;
use SparrowSDK\SparrowMerchantClient;

use SparrowSDK\Laravel\SparrowGateway;

use Illuminate\Contracts\Container\Container as Application;
use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;

/**
 * This is the Sparrow SDK service provider class
 */
class SDKServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider
     */
    public function boot()
    {
        $this->setupConfig($this->app);
    }

    /**
     * Setup the config.
     *
     * @param \Illuminate\Contracts\Container\Container $app
     */
    protected function setupConfig(Application $app)
    {
        $source = realpath(__DIR__ . '/Config/sparrow-sdk.php');

        if ($app instanceof LaravelApplication && $app->runningInConsole()) {
            $this->publishes([$source => config_path('sparrow-sdk.php')]);
        }

        $this->mergeConfigFrom($source, 'sparrow-sdk');
    }

    /**
     * Register the service provider
     */
    public function register()
    {
        $this->registerSparrowGateway($this->app);

        // $this->registerSparrowService($this->app);
        // $this->registerSparrowMerchant($this->app);
    }

    /**
     * Register the Sparrow gateway with the IoC container
     *
     * @param \Illuminate\Contracts\Container\Container $app
     */
    public function registerSparrowGateway(Application $app)
    {
        $app->singleton('sparrow-sdk', function ($app) {
            $config = $app['config']->get('sparrow-sdk');
            $mkey   = $config['mkey'] ?: null;

            return new SparrowGateway($mkey);
        });
    }

    /**
     * Register the Sparrow Service Client with the IoC container
     *
     * @param \Illuminate\Contracts\Container\Container $app
     */
    public function registerSparrowService(Application $app)
    {
        $app->singleton('sparrow-sdk.service', function ($app) {
            $config = $app['config']->get('sparrow-sdk');

            $serviceClient = new SparrowServiceClient;

            if (!empty($config['mkey'])) {
                $serviceClient->setMerchantKey($config['mkey']);
            }

            return $serviceClient;
        });
    }

    /**
     * Register the Sparrow Merchant Client with the IoC container
     *
     * @param \Illuminate\Contracts\Container\Container $app
     */
    public function registerSparrowMerchant(Application $app)
    {
        $app->singleton('sparrow-sdk.merchant', function ($app) {
            $config = $app['config']->get('sparrow-sdk');

            $merchantClient = new SparrowMerchantClient;

            if (!empty($config['mkey'])) {
                $merchantClient->setMerchantKey($config['mkey']);
            }

            return $merchantClient;
        });
    }

    /**
     * Get the services provided by this provider
     *
     * @return string[]
     */
    public function provides()
    {
        return [
            'sparrow-sdk',
            // 'sparrow-sdk.service',
            // 'sparrow-sdk.merchant'
        ];
    }
}
