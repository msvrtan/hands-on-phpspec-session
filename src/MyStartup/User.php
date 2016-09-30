<?php

namespace MyStartup;

use MyBank\Accounts\SavingsAccount;
use MyBank\Accounts\SpendingAccount;

class User
{

    private $userId;
    private $name;
    private $spendingAccount;
    private $savingsAccount;

    public function __construct($userId, $name, SpendingAccount $spendingAccount, SavingsAccount $savingsAccount)
    {
        $this->userId = $userId;
        $this->name = $name;
        $this->spendingAccount = $spendingAccount;
        $this->savingsAccount = $savingsAccount;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return SpendingAccount
     */
    public function getSpendingAccount()
    {
        return $this->spendingAccount;
    }

    /**
     * @return SavingsAccount
     */
    public function getSavingsAccount()
    {
        return $this->savingsAccount;
    }



}
