<?php

namespace JobMetric\Domi\Exceptions;

use Exception;
use Throwable;

class InvalidRelForLinkTagException extends Exception
{
    public function __construct(string $rel, int $code = 400, ?Throwable $previous = null)
    {
        parent::__construct("Invalid rel '$rel' for link tag", $code, $previous);
    }
}
