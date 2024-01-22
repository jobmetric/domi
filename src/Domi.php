<?php

namespace JobMetric\Domi;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Foundation\Application;
use JobMetric\Domi\Events\AddPluginEvent;
use JobMetric\Domi\Events\InitDomiEvent;
use JobMetric\Domi\Exceptions\CallMethodNotFoundException;
use JobMetric\Domi\Exceptions\SetPluginNotFoundException;

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
     * call method for Domi directive
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
     * set title for title tag
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->dom['title'] = $title;
    }

    /**
     * get title for title tag
     *
     * @return string
     */
    public function title(): string
    {
        return $this->dom['title'];
    }

    /**
     * set description for description meta tag
     *
     * @param string $description
     * @return void
     */
    public function setDescription(string $description): void
    {
        $this->dom['description'] = $description;
    }

    /**
     * get description for description meta tag
     *
     * @return string
     */
    public function description(): string
    {
        return $this->dom['description'];
    }

    /**
     * set keywords for keywords meta tag
     *
     * @param string $keywords
     * @return void
     */
    public function setKeywords(string $keywords): void
    {
        $this->dom['keywords'] = $keywords;
    }

    /**
     * get keywords for keywords meta tag
     *
     * @return array
     */
    public function keywords(): array
    {
        return $this->dom['keywords'];
    }

    /**
     * set author for author meta tag
     *
     * @param string $author
     * @return void
     */
    public function setAuthor(string $author): void
    {
        $this->dom['author'] = $author;
    }

    /**
     * get author for author meta tag
     *
     * @return string
     */
    public function author(): string
    {
        return $this->dom['author'];
    }

    /**
     * set canonical url for canonical meta tag
     *
     * @param string $url
     * @return void
     */
    public function setCanonical(string $url): void
    {
        $this->dom['canonical'] = $url;
    }

    /**
     * get canonical url for canonical meta tag
     *
     * @return string
     */
    public function canonical(): string
    {
        return $this->dom['canonical'];
    }

    /**
     * set robots data for robots meta tag
     *
     * @param string $robots
     * @return void
     */
    public function setRobots(string $robots): void
    {
        $this->dom['robots'] = $robots;
    }

    /**
     * get robots data for robots meta tag
     *
     * @return string
     */
    public function robots(): string
    {
        return $this->dom['robots'];
    }

    /**
     * set link data for link tag
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
     * get link data for link tag
     *
     * @return array
     */
    public function link(): array
    {
        return $this->dom['link'];
    }

    /**
     * set style data for style tag
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
     * get style data for style tag
     *
     * @return array
     */
    public function style(): array
    {
        return $this->dom['style'];
    }

    /**
     * set script data for script tag
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
     * get script data for script tag
     *
     * @return array
     */
    public function script(): array
    {
        return $this->dom['script'];
    }

    /**
     * set localize data
     *
     * @param string|null $key
     * @param array $l10n
     * @return void
     */
    public function setLocalize(string $key = null, array $l10n = []): void
    {
        if ($key) {
            foreach ($l10n as $index => $value) {
                if (!is_scalar($value)) {
                    continue;
                }

                if ($value === true) {
                    $l10n[$index] = true;
                } else if ($value === false) {
                    $l10n[$index] = false;
                } else {
                    $l10n[$index] = html_entity_decode((string)$value, ENT_QUOTES, 'UTF-8');
                }
            }

            if (isset($this->dom['localize'][$key])) {
                $this->dom['localize'][$key] = array_merge_recursive($this->dom['localize'][$key], $l10n);
            } else {
                $this->dom['localize'][$key] = $l10n;
            }
        }
    }

    /**
     * get localize data
     *
     * @return array
     */
    public function localize(): array
    {
        return $this->dom['localize'];
    }

    /**
     * set plugin by key and function
     *
     * @param string $key
     * @param callable $function
     * @return void
     */
    public function setPlugin(string $key, callable $function): void
    {
        $this->dom['plugin'][$key] = $function;
    }

    /**
     * set plugins by parameters
     *
     * @param mixed ...$parameters
     * @return void
     * @throws SetPluginNotFoundException
     */
    public function setPlugins(...$parameters): void
    {
        $plugins = require realpath(__DIR__ . '/../data/plugins.php');
        foreach ($plugins as $key => $func) {
            $this->setPlugin($key, $func);
        }

        event(new AddPluginEvent);

        foreach ($parameters as $parameter) {
            if (!isset($this->dom['plugin_counter'][$parameter])) {
                $this->dom['plugin_counter'][$parameter] = true;

                if (isset($this->dom['plugins'][$parameter])) {
                    $this->dom['plugins'][$parameter]();
                } else {
                    throw new SetPluginNotFoundException($parameter);
                }
            }
        }
    }

    /**
     * get plugin
     *
     * @return array
     */
    public function plugin(): array
    {
        return $this->dom['plugin'];
    }

    /**
     * set template name
     *
     * @param string $template
     * @return void
     */
    public function setTemplate(string $template): void
    {
        $this->dom['template'] = $template;
    }

    /**
     * get template name
     *
     * @return string
     */
    public function template(): string
    {
        return $this->dom['template'];
    }

    /**
     * set logo path
     *
     * @param string $logo
     * @return void
     */
    public function setLogo(string $logo): void
    {
        $this->dom['logo'] = $logo;
    }

    /**
     * get logo path
     *
     * @return string
     */
    public function logo(): string
    {
        return $this->dom['logo'];
    }

    /**
     * set favicon path
     *
     * @param string $favicon
     * @return void
     */
    public function setFavicon(string $favicon): void
    {
        $this->dom['favicon'] = $favicon;
    }

    /**
     * get favicon path
     *
     * @return string
     */
    public function favicon(): string
    {
        return $this->dom['favicon'];
    }

    /**
     * set theme color for theme-color meta tag in mobile browsers
     *
     * @param string $color
     * @return void
     */
    public function setThemeColor(string $color): void
    {
        $this->dom['theme_color'] = $color;
    }

    /**
     * get theme color for theme-color meta tag in mobile browsers
     *
     * @return string
     */
    public function themeColor(): string
    {
        return $this->dom['theme_color'];
    }

    /**
     * set page type for open graph
     * website, article, book, profile, music, video
     *
     * @see https://ogp.me/
     * @param string $type
     * @return void
     */
    public function setPageType(string $type = 'website'): void
    {
        $this->dom['page_type'] = $type;
    }

    /**
     * get page type for open graph
     * website, article, book, profile, music, video
     *
     * @see https://ogp.me/
     * @return string
     */
    public function pageType(): string
    {
        return $this->dom['page_type'];
    }
}
