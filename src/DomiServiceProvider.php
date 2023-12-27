<?php

namespace JobMetric\Domi;

use Illuminate\Support\ServiceProvider;
use JobMetric\Domi\Console\Commands\CreateViewCommand;
use JobMetric\Domi\Providers\EventServiceProvider;

class DomiServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind('Domi', function ($app) {
            return new Domi($app);
        });

        $this->app->register(EventServiceProvider::class);

        // merge config
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'domi');

        // load views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'domi');

        // load translations
        $this->loadTranslationsFrom(__DIR__ . '/../lang', 'domi');
    }

    /**
     * boot provider
     *
     * @return void
     */
    public function boot(): void
    {
        $this->registerPublishables();
        $this->registerCommands();
    }

    /**
     * register publishables
     *
     * @return void
     */
    protected function registerPublishables(): void
    {
        if (!$this->app->runningInConsole()) {
            return;
        }

        // publish config
        $this->publishes([
            realpath(__DIR__ . '/../config/config.php') => config_path('domi.php')
        ], 'config');

        // publish assets
        $this->publishes([
            realpath(__DIR__ . '/../assets') => public_path('vendor/domi')
        ], 'public');

        // publish views
        $this->publishes([
            realpath(__DIR__ . '/../resources/views') => resource_path('views/vendor/domi')
        ], 'views');
    }

    /**
     * Register Commands
     *
     * @return void
     */
    private function registerCommands(): void
    {
        if (!$this->app->runningInConsole()) {
            return;
        }

        $this->app->bind('command.domi:view', CreateViewCommand::class);

        $this->commands([
            'command.domi:view'
        ]);
    }
}
