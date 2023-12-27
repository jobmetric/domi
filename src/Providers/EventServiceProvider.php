<?php

namespace JobMetric\Domi\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use JobMetric\Domi\Events\InitDomiEvent;
use JobMetric\Domi\Listeners\InitThemeListener;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        InitDomiEvent::class => [
            InitThemeListener::class,
        ],
    ];
}
