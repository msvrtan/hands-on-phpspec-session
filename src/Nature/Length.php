<?php

namespace Nature;

class Length
{
    private $number;

    public function __construct($number)
    {
        $this->number = (float)$number;
    }

    public function getLengthInCentimeters()
    {
        return $this->number * 100;
    }

    protected function getLength()
    {
        return $this->number;
    }

    public function getLengthInMeters()
    {
        return $this->getLength();
    }

    public function getLengthInMilimeters()
    {
        return $this->getLength() * 1000;
    }

    public function getLengthInFeet()
    {
        return $this->getLength() * 3.28;
    }
}
