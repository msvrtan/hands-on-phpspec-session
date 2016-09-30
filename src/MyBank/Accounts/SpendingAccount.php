<?php

namespace MyBank\Accounts;

use Bussiness\Money;

class SpendingAccount implements BankAccount
{

    private $accountNumber;
    private $amount;

    /**
     * SavingsAccount constructor.
     *
     * @param $accountNumber
     * @param $amount
     */
    public function __construct($accountNumber, Money $amount)
    {
        $this->accountNumber = $accountNumber;
        $this->amount = $amount;
    }
}
