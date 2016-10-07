<?php

namespace SuperStartup;

use Bank\SavingsAccount;
use Bank\SpendingAccount;

class UserRepository
{
    public function getUserBySpendingAccount(SpendingAccount $spendingAccount)
    {
        return new User($spendingAccount,new SavingsAccount());
    }
}
