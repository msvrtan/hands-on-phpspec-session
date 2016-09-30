<?php

namespace MyStartup;

use Bussiness\Money;
use MyBank\Accounts\BankAccount;

class Transfer
{

    private $from;
    private $to;
    private $amount;

    public function __construct(BankAccount $from, BankAccount $to, Money $amount)
    {
        $this->from = $from;
        $this->to = $to;
        $this->amount = $amount;
    }
}
