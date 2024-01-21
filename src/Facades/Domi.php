<?php

namespace JobMetric\Domi\Facades;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Facade;

/**
 * @method static void setTitle(string $title)
 * @method static string title()
 * @method static void setDescription(string $title)
 * @method static string description()
 * @method static void setMeta(array $meta)
 * @method static array meta()
 * @method static void setLink(string $link)
 * @method static string link()
 *
 * @see \JobMetric\Domi\Domi
 */
class Domi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'Domi';
    }
}
