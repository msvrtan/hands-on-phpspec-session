<?php

namespace Nature;

class Length
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getInMeters()
    {
        return $this->value;
    }

    public function getInCentimeters()
    {
        return $this->value*100;
    }

}
