<?php

namespace JobMetric\Domi;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Foundation\Application;
use JobMetric\Domi\Events\InitDomiEvent;
use JobMetric\Domi\Exceptions\CallMethodNotFoundException;

class Domi
{
    /**
     * The application instance.
     *
     * @var Application
     */
    protected Application $app;

    /**
     * The Dom Object.
     *
     * @var array
     */
    protected array $dom = [];

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

    /**
     * call method
     *
     * @param string $method
     * @return mixed
     * @throws CallMethodNotFoundException
     */
    public function call(string $method): mixed
    {
        $method = trim($method, "'");
        if (str_starts_with($method, 'set')) {
            throw new CallMethodNotFoundException($method);
        } else {
            if (method_exists($this, $method)) {
                return $this->{$method}();
            } else {
                throw new CallMethodNotFoundException($method);
            }
        }
    }

    /**
     * set title
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->dom['title'] = $title;
    }

    /**
     * get title
     *
     * @return string
     */
    public function title(): string
    {
        return $this->dom['title'];
    }

    /**
     * set description
     *
     * @param string $description
     * @return void
     */
    public function setDescription(string $description): void
    {
        $this->dom['description'] = $description;
    }

    /**
     * get description
     *
     * @return string
     */
    public function description(): string
    {
        return $this->dom['description'];
    }

    /**
     * set meta
     *
     * @param array $meta
     * @return void
     */
    public function setMeta(array $meta): void
    {
        $this->dom['meta'] = $meta;
    }

    /**
     * get meta
     *
     * @return array
     */
    public function meta(): array
    {
        return $this->dom['meta'];
    }

    /**
     * set link
     *
     * @param string $link
     * @return void
     */
    public function setLink(string $link): void
    {
        $this->dom['link'] = $link;
    }

    /**
     * get link
     *
     * @return string
     */
    public function link(): string
    {
        return $this->dom['link'];
    }
}
