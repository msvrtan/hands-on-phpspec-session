<?php

namespace spec\MyBank\Accounts;

use Bussiness\Money;
use MyBank\Accounts\BankAccount;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SavingsAccountSpec extends ObjectBehavior
{
    function let(Money $amount)
    {
        $this->beConstructedWith('account-number', $amount);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('MyBank\Accounts\SavingsAccount');
        $this->shouldHaveType(BankAccount::class);
    }
}
