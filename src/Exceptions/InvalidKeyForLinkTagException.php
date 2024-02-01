<?php

namespace JobMetric\Domi\Exceptions;

use Exception;
use Throwable;

class InvalidKeyForLinkTagException extends Exception
{
    public function __construct(int $code = 400, ?Throwable $previous = null)
    {
        parent::__construct('Invalid key for link tag', $code, $previous);
    }
}
