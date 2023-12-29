<?php

namespace JobMetric\Domi;

use Illuminate\Support\ServiceProvider;
use JobMetric\Domi\Console\Commands\CreateViewCommand;
use JobMetric\Domi\Providers\EventServiceProvider;
use JobMetric\PackageCore\Exceptions\RegisterClassTypeNotFoundException;
use JobMetric\PackageCore\Exceptions\ViewFolderNotFoundException;
use JobMetric\PackageCore\PackageCore;
use JobMetric\PackageCore\PackageCoreServiceProvider;

class DomiServiceProvider extends PackageCoreServiceProvider
{
    /**
     * @throws RegisterClassTypeNotFoundException
     * @throws ViewFolderNotFoundException
     */
    public function configuration(PackageCore $package): void
    {
        $package->name('domi')
            ->hasConfig()
            ->hasTranslation()
            ->hasView()
            ->registerCommand(CreateViewCommand::class)
            ->registerClass('Domi', Domi::class);
    }

    /*public function register(): void
    {
        $this->app->register(EventServiceProvider::class);
    }*/

    /**
     * boot provider
     *
     * @return void
     */
    /*public function boot(): void
    {
        $this->registerPublishables();
    }*/

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

        // publish assets
        $this->publishes([
            realpath(__DIR__ . '/../assets') => public_path('vendor/domi')
        ], 'public');
    }
}
