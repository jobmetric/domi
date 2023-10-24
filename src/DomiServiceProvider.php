<?php

namespace JobMetric\Domi;

use Illuminate\Support\ServiceProvider;

class DomiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('JDomi', function ($app) {
            return new JDomi($app);
        });

        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'j-domi');
    }

    /**
     * boot provider
     *
     * @return void
     */
    public function boot(): void
    {
        $this->registerPublishables();

        // set translations
        $this->loadTranslationsFrom(realpath(__DIR__.'/../lang'), 'j-domi');
    }

    /**
     * register publishables
     *
     * @return void
     */
    protected function registerPublishables(): void
    {
        if($this->app->runningInConsole()) {
            // publish config
            $this->publishes([
                realpath(__DIR__.'/../config/config.php') => config_path('j-domi.php')
            ], 'domi-config');
        }
    }
}
