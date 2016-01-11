<?php

namespace Hardywen\PhpSms;

use Illuminate\Support\ServiceProvider;
use Toplan\PhpSms\Sms;

class PhpSmsServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->package('hardywen/phpsms-l4');

        $config = $this->app->config->get('phpsms-l4::config');

        Sms::enable(isset($config['enable']) ? $config['enable'] : []);
        Sms::agents(isset($config['agents']) ? $config['agents'] : []);

        $this->app->singleton('phpsms-l4', function ($app) {
            return new Sms(false);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['phpsms-l4'];
    }
}