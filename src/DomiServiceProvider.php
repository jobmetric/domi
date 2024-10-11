<?php

namespace JobMetric\Domi;

use Illuminate\Support\Facades\Blade;
use JobMetric\Domi\Console\Commands\CreateViewCommand;
use JobMetric\Domi\Providers\EventServiceProvider;
use JobMetric\PackageCore\Enums\RegisterClassTypeEnum;
use JobMetric\PackageCore\Exceptions\AssetFolderNotFoundException;
use JobMetric\PackageCore\Exceptions\RegisterClassTypeNotFoundException;
use JobMetric\PackageCore\Exceptions\ViewFolderNotFoundException;
use JobMetric\PackageCore\PackageCore;
use JobMetric\PackageCore\PackageCoreServiceProvider;

class DomiServiceProvider extends PackageCoreServiceProvider
{
    /**
     * @throws RegisterClassTypeNotFoundException
     * @throws ViewFolderNotFoundException
     * @throws AssetFolderNotFoundException
     */
    public function configuration(PackageCore $package): void
    {
        $package->name('domi')
            ->hasConfig()
            ->hasTranslation()
            ->hasView()
            ->hasAsset()
            ->registerCommand(CreateViewCommand::class)
            ->registerClass('event', EventServiceProvider::class, RegisterClassTypeEnum::REGISTER())
            ->registerClass('Domi', Domi::class, RegisterClassTypeEnum::SINGLETON());
    }

    public function afterBootPackage(): void
    {
        Blade::directive('domi', function ($expression) {
            return "<?php echo \\JobMetric\\Domi\\Facades\\Domi::call($expression); ?>";
        });

        Blade::if('isDomi', function ($expression) {
            return \JobMetric\Domi\Facades\Domi::isCall($expression);
        });

        Blade::directive('domiForgetFooterContent', function ($key) {
            return "<?php echo \\JobMetric\\Domi\\Facades\\Domi::forgetFooterContent($key); ?>";
        });
    }
}
