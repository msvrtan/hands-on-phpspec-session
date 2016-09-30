<?php

namespace spec\MyStartup;

use Bussiness\Money;
use MyBank\Accounts\SavingsAccount;
use MyBank\Accounts\SpendingAccount;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TransferSpec extends ObjectBehavior
{
    function let(SpendingAccount $spendingAccount, SavingsAccount $savingsAccount, Money $amount)
    {
        $this->beConstructedWith($spendingAccount, $savingsAccount, $amount);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('MyStartup\Transfer');
    }
}
