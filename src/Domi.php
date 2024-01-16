<?php

namespace JobMetric\Domi;

use Illuminate\Contracts\Foundation\Application;

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
     * @return void
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }
}
