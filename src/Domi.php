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

    private static Domi $instance;

    private ?string $logo = null;
    private ?string $favicon = null;
    private ?string $theme_color = null;
    private ?string $background_color = null;
    private ?string $section = null;
    private ?string $title = null;
    private ?string $description = null;
    private ?string $keywords = null;
    private ?string $canonical = null;
    private ?string $image = null;
    private ?string $page_type = null;
    private ?string $robots = 'index,follow';
    private ?string $body_class = null;
    private array $plugins = [];
    private array $localize = [];
    private array $localize_counter = [];
    private array $links = [];
    private array $styles = [];
    private array $scripts = [];

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

        if(config()->has('domi.logo')) {
            $this->logo = config('domi.logo');
        }

        if(config()->has('domi.favicon')) {
            $this->favicon = config('domi.favicon');
        }
    }
}
