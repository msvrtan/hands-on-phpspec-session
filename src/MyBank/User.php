<?php

namespace MyBank;

class User
{
    private $userId;

    /** @var  Account */
    private $checkingAccount;
    /** @var  Account */
    private $savingsAccount;

    /**
     * User constructor.
     *
     * @param         $userId
     * @param Account $checkingAccount
     * @param Account $savingsAccount
     */
    public function __construct($userId, Account $checkingAccount, Account $savingsAccount)
    {
        $this->userId = $userId;
        $this->checkingAccount = $checkingAccount;
        $this->savingsAccount = $savingsAccount;
    }

    /**
     * @return Account
     */
    public function getCheckingAccount()
    {
        return $this->checkingAccount;
    }

    /**
     * @return Account
     */
    public function getSavingsAccount()
    {
        return $this->savingsAccount;
    }

    public function isCheckingAccountRounded()
    {
        return $this->checkingAccount->isAccountRounded();
    }

    public function getCheckingAccountNumber()
    {
        return $this->checkingAccount->getAccountNumber();
    }

    public function getSavingsAccountNumber()
    {
        return $this->savingsAccount->getAccountNumber();
    }

    public function getAmountToSavings()
    {
        return $this->checkingAccount->getRoundedAmount();
    }

}
