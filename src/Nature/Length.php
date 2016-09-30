<?php

namespace Nature;

class Length
{

    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function inCentimiters()
    {
        return $this->value * 100;
    }

    public function inMilimiters()
    {
        return $this->inMeters() * 1000;
    }

    public function inMeters()
    {
        return $this->value;
    }

}
