<?php

namespace Bank;

use Money\Money;

class SpentMoneyTransaction
{
    private $spendingAccount;
    private $money;

    public function __construct(SpendingAccount $spendingAccount, Money $money)
    {
        $this->spendingAccount = $spendingAccount;
        $this->money = $money;
    }
}
