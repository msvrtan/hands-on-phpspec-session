<?php

namespace MyBank;

use Bussiness\Money;
use MyStartup\Transfer;
use MyStartup\User;

class Api
{
    public function fetchBalance(User $user)
    {
        return new Money(10, 'EUR');
    }

    public function transfer(Transfer $transfer)
    {
        return true;
    }
}
