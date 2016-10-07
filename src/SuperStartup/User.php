<?php

namespace SuperStartup;

use Bank\SavingsAccount;
use Bank\SpendingAccount;

class User
{
    private $spendingAccount;
    private $savingsAccount;

    public function __construct(SpendingAccount $spendingAccount, SavingsAccount $savingsAccount)
    {
        $this->spendingAccount = $spendingAccount;
        $this->savingsAccount = $savingsAccount;
    }
}
