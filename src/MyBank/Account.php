<?php

namespace MyBank;

class Account
{
    private $accountNumber;
    private $balance;

    /**
     * Account constructor.
     *
     * @param $accountNumber
     * @param $balance
     */
    public function __construct($accountNumber, $balance)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    /**
     * @return mixed
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->balance;
    }

    public function isAccountRounded()
    {
        // TODO: write logic here
    }

    public function getRoundedAmount()
    {
        // TODO: write logic here
    }

}
