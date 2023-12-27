<?php

namespace JobMetric\Domi\Listeners;

use JobMetric\Domi\Facades\Domi;
use JobMetric\Domi\Events\InitDomiEvent;

class InitThemeListener
{
    /**
     * Handle the event.
     */
    public function handle(InitDomiEvent $event): void
    {
        /*Domi::document()->addScript('vendor/global-variable/global-variable.js');

        $template = config('global-variable.template');

        $file_path = resource_path('views/templates/'.$template.'/init.php');
        if(file_exists($file_path)) {
            require_once $file_path;

            $func_init_template = $template.'_init_template';
            if(function_exists($func_init_template)) {
                $func_init_template();
            }
        }*/
    }
}
