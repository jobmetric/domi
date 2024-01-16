<?php

namespace JobMetric\Domi;

use JobMetric\Domi\Console\Commands\CreateViewCommand;
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
            ->registerClass('Domi', Domi::class);
    }
}
