<?php

namespace JobMetric\Domi;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Foundation\Application;
use JobMetric\Domi\Events\InitDomiEvent;

class Domi
{
    /**
     * The application instance.
     *
     * @var Application
     */
    protected Application $app;

    /**
     * Create a new Domi instance.
     *
     * @param Application $app
     *
     * @throws BindingResolutionException
     */
    public function __construct(Application $app)
    {
        $this->app = $app;

        // Init Domi Service
        $this->app->make('events')->dispatch(new InitDomiEvent);
    }

    public function call($expression)
    {
        return $expression;
    }
}
