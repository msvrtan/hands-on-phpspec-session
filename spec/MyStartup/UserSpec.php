<?php

namespace spec\MyStartup;

use MyBank\Accounts\SavingsAccount;
use MyBank\Accounts\SpendingAccount;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserSpec extends ObjectBehavior
{
    function let(SpendingAccount $spendingAccount, SavingsAccount $savingsAccount)
    {
        $this->beConstructedWith('user-id', 'John Doe', $spendingAccount, $savingsAccount);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('MyStartup\User');
    }
}
