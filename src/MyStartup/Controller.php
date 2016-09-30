<?php

namespace MyStartup;

use Bussiness\Money;
use MyBank\Api;

class Controller
{
    private $bankApi;
    private $user;

    public function __construct(Api $bankApi, User $user)
    {
        $this->bankApi = $bankApi;
        $this->user = $user;
    }

    public function doWork()
    {
        $balance = $this->bankApi->fetchBalance($this->user);

        if ($balance->hasCents()) {

            $cents = $balance->getCents();

            $transfer = new Transfer(
                $this->user->getSpendingAccount(),
                $this->user->getSavingsAccount(),
                new Money($cents / 100, 'EUR')
            );

            $result = $this->bankApi->transfer($transfer);

            return true;

        }

        return false;

    }
}
