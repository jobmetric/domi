<?php

namespace JobMetric\Domi\Exceptions;

use Exception;
use Throwable;

class SetPluginNotFoundException extends Exception
{
    public function __construct(string $plugin, int $code = 400, ?Throwable $previous = null)
    {
        parent::__construct("Domi Plugin '$plugin' not found.", $code, $previous);
    }
}
