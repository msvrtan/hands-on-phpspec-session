<?php

namespace spec\SuperStartup;

use Bank\SpendingAccount;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use SuperStartup\User;

class UserRepositorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('SuperStartup\UserRepository');
    }

    function it_will_return_user_by_spending_account(SpendingAccount $spendingAccount, User $user)
    {
        $this->getUserBySpendingAccount($spendingAccount)->shouldBeAnInstanceOf(User::class);
    }

}
