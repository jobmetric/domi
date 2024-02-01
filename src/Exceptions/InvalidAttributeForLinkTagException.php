<?php

namespace JobMetric\Domi\Exceptions;

use Exception;
use Throwable;

class InvalidAttributeForLinkTagException extends Exception
{
    public function __construct(int $code = 400, ?Throwable $previous = null)
    {
        parent::__construct('Invalid attribute for link tag', $code, $previous);
    }
}
