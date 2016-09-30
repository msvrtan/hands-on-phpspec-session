<?php

namespace Bussiness;

class Money
{
    private $amount;
    private $currency;

    /**
     * Money constructor.
     *
     * @param $amount
     * @param $currency
     */
    public function __construct($amount, $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function hasCents()
    {
        if (0 !== $this->getCents()->getAmount()) {
            return true;
        }

        return false;
    }

    public function getCents()
    {

        return new Money(100 * ($this->amount) % 100, $this->currency);
    }

    function getAmount()
    {
        return $this->amount;
    }

}
