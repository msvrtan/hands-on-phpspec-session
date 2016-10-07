<?php

namespace MyShop;

use Nature\Length;

class ProductLength
{
    /**
     * @var Length
     */
    private $length;

    public function __construct(Length $length)
    {
        $this->length = $length;
    }

    public function getFormattedValue()
    {
        if( $this->length->getInMeters() > 5 ){
            return $this->length->getInMeters().' m';
        }

        return $this->length->getInCentimeters().' cm';
    }
}
