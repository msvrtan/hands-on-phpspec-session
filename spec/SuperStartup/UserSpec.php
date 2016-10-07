<?php

namespace spec\SuperStartup;

use Bank\SavingsAccount;
use Bank\SpendingAccount;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserSpec extends ObjectBehavior
{
    function let(SpendingAccount $spendingAccount, SavingsAccount $savingsAccount)
    {
        $this->beConstructedWith($spendingAccount, $savingsAccount);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('SuperStartup\User');
    }
}
