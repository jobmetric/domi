<?php

namespace JobMetric\Domi\Exceptions;

use Exception;
use Throwable;

class CallMethodNotFoundException extends Exception
{
    public function __construct(string $method, int $code = 400, ?Throwable $previous = null)
    {
        parent::__construct("Method $method not found in Domi class.", $code, $previous);
    }
}
