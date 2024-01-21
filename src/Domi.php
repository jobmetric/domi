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
     * set keywords
     *
     * @param string $keywords
     * @return void
     */
    public function setKeywords(string $keywords): void
    {
        $this->dom['keywords'] = $keywords;
    }

    /**
     * get keywords
     *
     * @return array
     */
    public function keywords(): array
    {
        return $this->dom['keywords'];
    }

    /**
     * set canonical
     *
     * @param string $url
     * @return void
     */
    public function setCanonical(string $url): void
    {
        $this->dom['canonical'] = $url;
    }

    /**
     * get canonical
     *
     * @return string
     */
    public function canonical(): string
    {
        return $this->dom['canonical'];
    }

    /**
     * set robots
     *
     * @param string $robots
     * @return void
     */
    public function setRobots(string $robots): void
    {
        $this->dom['robots'] = $robots;
    }

    /**
     * get robots
     *
     * @return string
     */
    public function robots(): string
    {
        return $this->dom['robots'];
    }

    /**
     * set link
     *
     * @param string $link
     * @param string $rel
     * @return void
     */
    public function setLink(string $link, string $rel): void
    {
        $this->dom['link'][md5($link)] = [
            'link' => $link,
            'rel' => $rel
        ];
    }

    /**
     * get link
     *
     * @return array
     */
    public function link(): array
    {
        return $this->dom['link'];
    }

    /**
     * set style
     *
     * @param string $href
     * @param string $rel
     * @param string|null $media
     * @return void
     */
    public function setStyle(string $href, string $rel = 'stylesheet', string $media = null): void
    {
        $this->dom['style'][md5($href)] = [
            'href' => $href,
            'rel' => $rel,
            'media' => $media
        ];
    }

    /**
     * get style
     *
     * @return array
     */
    public function style(): array
    {
        return $this->dom['style'];
    }

    /**
     * set script
     *
     * @param string $src
     * @param string $type
     * @param bool $async
     * @param bool $defer
     * @return void
     */
    public function setScript(string $src, string $type = 'application/javascript', bool $async = false, bool $defer = false): void
    {
        $this->dom['script'][md5($src)] = [
            'src' => $src,
            'type' => $type,
            'async' => $async,
            'defer' => $defer
        ];
    }

    /**
     * get script
     *
     * @return array
     */
    public function script(): array
    {
        return $this->dom['script'];
    }
}
