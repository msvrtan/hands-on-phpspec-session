<?php

namespace MyShop\Formatters;

use Nature\Length;

class LengthFormatter
{
    private $value;

    public function __construct(Length $value)
    {
        $this->value = $value;
    }

    public function formatProductLengthInCentimeters()
    {
        return $this->value->getInCentimeters().' cm';
    }

    public function formatProductLengthInMilimeters()
    {
        return $this->value->getInMilimeters().' mm';
    }

}
