<?php

namespace WebShop;

use Nature\Length;

class PrettyLengthFormatter
{
    private $value;

    public function __construct(Length $value)
    {
        $this->value = $value;
    }

    public function format()
    {
        if ($this->value->inMeters() < 1) {
            return $this->value->inCentimiters().'cm';
        }

        return $this->value->inMeters().'m';
    }
}
