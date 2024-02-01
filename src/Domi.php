<?php

namespace JobMetric\Domi;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Arr;
use JobMetric\Domi\Enums\PageTypeEnum;
use JobMetric\Domi\Enums\ScriptPositionEnum;
use JobMetric\Domi\Events\AddPluginEvent;
use JobMetric\Domi\Events\InitDomiEvent;
use JobMetric\Domi\Exceptions\CallMethodNotFoundException;
use JobMetric\Domi\Exceptions\InvalidKeyForLinkTagException;
use JobMetric\Domi\Exceptions\SetPluginNotFoundException;
use JobMetric\PackageCore\Exceptions\ArrayNotAssocException;
use Throwable;

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

        // Default Domi
        $this->dom = [
            'site_name' => config('domi.site_name'),
            'template' => config('domi.template'),
            'title' => config('domi.title'),
            'description' => config('domi.description'),
            'keywords' => config('domi.keywords'),
            'author' => config('domi.author'),
            'robots' => config('domi.robots'),
            'plugin' => config('domi.plugin'),
            'logo' => config('domi.logo'),
            'favicon' => config('domi.favicon'),
            'theme_color' => config('domi.theme_color'),
            'page_type' => config('domi.page_type'),
            'body_class' => config('domi.body_class'),
        ];
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
     * is valuable call method for Domi directive
     *
     * @param string $method
     * @return bool
     * @throws CallMethodNotFoundException
     */
    public function isCall(string $method): bool
    {
        return (bool)$this->call($method);
    }

    /**
     * set site name for title tag
     *
     * @param string|null $siteName
     * @return void
     */
    public function setSiteName(string|null $siteName): void
    {
        $this->dom['site_name'] = $siteName;
    }

    /**
     * get site name
     *
     * @return string|null
     */
    public function siteName(): ?string
    {
        return $this->dom['site_name'] ?? null;
    }

    /**
     * set title for title tag
     *
     * @param string|null $title
     * @return void
     */
    public function setTitle(string|null $title): void
    {
        $this->dom['title'] = $title;
    }

    /**
     * get title for title tag
     *
     * @return string|null
     */
    public function title(): ?string
    {
        return $this->dom['title'] ?? null;
    }

    /**
     * set description for description meta tag
     *
     * @param string|null $description
     * @return void
     */
    public function setDescription(string|null $description): void
    {
        $this->dom['description'] = $description;
    }

    /**
     * get description for description meta tag
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return $this->dom['description'] ?? null;
    }

    /**
     * set keywords for keywords meta tag
     *
     * @param string|null $keywords
     * @return void
     */
    public function setKeywords(string|null $keywords): void
    {
        $this->dom['keywords'] = $keywords;
    }

    /**
     * get keywords for keywords meta tag
     *
     * @return string|null
     */
    public function keywords(): ?string
    {
        return $this->dom['keywords'] ?? null;
    }

    /**
     * set image for page
     *
     * @param string|null $url
     * @return void
     */
    public function setImage(string|null $url): void
    {
        $this->dom['image'] = $url;
    }

    /**
     * get image for page
     *
     * @return string|null
     */
    public function image(): ?string
    {
        return $this->dom['image'] ?? null;
    }

    /**
     * set author for author meta tag
     *
     * @param string|null $author
     * @return void
     */
    public function setAuthor(string|null $author): void
    {
        $this->dom['author'] = $author;
    }

    /**
     * get author for author meta tag
     *
     * @return string|null
     */
    public function author(): ?string
    {
        return $this->dom['author'] ?? null;
    }

    /**
     * set canonical url for canonical meta tag
     *
     * @param string|null $url
     * @return void
     */
    public function setCanonical(string|null $url): void
    {
        $this->dom['canonical'] = $url;
    }

    /**
     * get canonical url for canonical meta tag
     *
     * @return string|null
     */
    public function canonical(): ?string
    {
        return $this->dom['canonical'] ?? null;
    }

    /**
     * set robots data for robots meta tag
     *
     * @param string|null $robots
     * @return void
     */
    public function setRobots(string|null $robots): void
    {
        $this->dom['robots'] = $robots;
    }

    /**
     * get robots data for robots meta tag
     *
     * @return string|null
     */
    public function robots(): ?string
    {
        return $this->dom['robots'] ?? null;
    }

    /**
     * set link data for link tag
     *
     * @param string $rel
     * @param string $href
     * @param array $items
     * @return void
     * @throws Throwable
     */
    public function setLink(string $rel, string $href, array $items): void
    {
        if(!Arr::isAssoc($items)) {
            throw new ArrayNotAssocException;
        }

        foreach ($items as $key => $value) {
            if(!in_array($key, ['crossorigin', 'href', 'hreflang', 'media', 'referrerpolicy', 'sizes', 'title', 'type', 'integrity'])) {
                throw new InvalidKeyForLinkTagException;
            }
        }

        $this->dom['link'][$rel][md5($href)] = [
            'href' => $href,
            'items' => $items
        ];
    }

    /**
     * get link data for link tag
     *
     * @return array
     */
    public function link(): array
    {
        return $this->dom['link'] ?? [];
    }

    /**
     * set style data for style tag
     *
     * @param string $href
     * @param string|null $media
     * @param string|null $integrity
     * @param string|null $crossOrigin
     * @return void
     * @throws Throwable
     */
    public function setStyle(string $href, string $media = null, string $integrity = null, string $crossOrigin = null): void
    {
        $this->setLink('stylesheet', $href, [
            'media' => $media,
            'integrity' => $integrity,
            'crossorigin' => $crossOrigin,
        ]);
    }

    /**
     * set script data for script tag
     *
     * @param string $src
     * @param string $type
     * @param bool $async
     * @param bool $defer
     * @param string $position
     * @return void
     */
    public function setScript(string $src, string $type = 'application/javascript', bool $async = false, bool $defer = false, string $position = 'bottom'): void
    {
        $this->dom['script'][$position][md5($src)] = [
            'src' => $src,
            'type' => $type,
            'async' => $async,
            'defer' => $defer
        ];
    }

    /**
     * get top script data for script tag
     *
     * @return array
     */
    public function topScript(): array
    {
        return $this->dom['script'][ScriptPositionEnum::TOP()] ?? [];
    }

    /**
     * get bottom script data for script tag
     *
     * @return array
     */
    public function bottomScript(): array
    {
        return $this->dom['script'][ScriptPositionEnum::BOTTOM()] ?? [];
    }

    /**
     * set localize data for localize script variable
     *
     * @param string|null $key
     * @param array|string $l10n
     * @return void
     */
    public function setLocalize(string $key = null, array|string $l10n = []): void
    {
        if ($key) {
            if (is_array($l10n)) {
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
            } else {
                $l10n = html_entity_decode($l10n, ENT_QUOTES, 'UTF-8');
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
        return $this->dom['localize'] ?? [];
    }

    /**
     * render localize data
     *
     * @return string
     */
    public function renderLocalize(): string
    {
        return json_encode($this->localize(), JSON_UNESCAPED_UNICODE);
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
        $this->dom['plugins'][$key] = $function;
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

        foreach ($parameters[0] as $parameter) {
            if (!isset($this->dom['plugin_counter'][$parameter])) {
                $this->dom['plugin_counter'][$parameter] = true;

                if (in_array($parameter, array_keys($this->dom['plugins']))) {
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
        return $this->dom['plugins'] ?? [];
    }

    /**
     * set template name
     *
     * @param string|null $template
     * @return void
     */
    public function setTemplate(string|null $template): void
    {
        $this->dom['template'] = $template;
    }

    /**
     * get template name
     *
     * @return string|null
     */
    public function template(): ?string
    {
        return $this->dom['template'] ?? null;
    }

    /**
     * set logo path
     *
     * @param string|null $logo
     * @return void
     */
    public function setLogo(string|null $logo): void
    {
        $this->dom['logo'] = $logo;
    }

    /**
     * get logo path
     *
     * @return string|null
     */
    public function logo(): ?string
    {
        return $this->dom['logo'] ?? null;
    }

    /**
     * set favicon path
     *
     * @param string|null $favicon
     * @return void
     */
    public function setFavicon(string|null $favicon): void
    {
        $this->dom['favicon'] = $favicon;
    }

    /**
     * get favicon path
     *
     * @return string|null
     */
    public function favicon(): ?string
    {
        return $this->dom['favicon'] ?? null;
    }

    /**
     * set theme color for theme-color meta tag in mobile browsers
     *
     * @param string|null $color
     * @return void
     */
    public function setThemeColor(string|null $color): void
    {
        $this->dom['theme_color'] = $color;
    }

    /**
     * get theme color for theme-color meta tag in mobile browsers
     *
     * @return string|null
     */
    public function themeColor(): ?string
    {
        return $this->dom['theme_color'] ?? null;
    }

    /**
     * set page type for open graph
     * @param string|null $type
     * @return void
     * @see PageTypeEnum
     * @see https://ogp.me/
     */
    public function setPageType(string|null $type = 'website'): void
    {
        $this->dom['page_type'] = $type;
    }

    /**
     * get page type for open graph
     * website, article, book, profile, music, video
     *
     * @see https://ogp.me/
     * @return string|null
     */
    public function pageType(): ?string
    {
        return $this->dom['page_type'] ?? null;
    }

    /**
     * set body class
     *
     * @param string|null $class
     * @return void
     */
    public function setBodyClass(string|null $class): void
    {
        $this->dom['body_class'] = $class;
    }

    /**
     * get body class
     *
     * @return string|null
     */
    public function bodyClass(): ?string
    {
        return $this->dom['body_class'] ?? null;
    }
}
