<?php

namespace MyShop\LengthFormatter;

use Nature\Length;

class NiceLengthFormatter
{
    private $length;

    public function __construct(Length $length)
    {
        $this->length = $length;
    }

    public function getLength()
    {

        if ($this->length->getLengthInMilimeters() < 10) {
            return $this->length->getLengthInMilimeters().'mm';
        }

        if ($this->length->getLengthInCentimeters() < 100) {
            return $this->length->getLengthInCentimeters().'cm';
        }

        return $this->length->getLengthInMeters().'m';
    }

}
