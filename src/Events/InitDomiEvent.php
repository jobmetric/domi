<?php

namespace JobMetric\Domi\Events;

use JobMetric\Domi\Domi;

class InitDomiEvent
{
    public Domi $domi;

    public function __construct(Domi $domi)
    {
        $this->domi = $domi;
    }
}
