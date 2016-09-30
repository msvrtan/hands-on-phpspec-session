<?php

namespace Nature;

class Length
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getInjectedValue()
    {
        return $this->value;
    }

    public function getInCentimeters()
    {
        return $this->value * 100;
    }

    public function getInMilimeters()
    {
        return $this->value * 1000;
    }
}
