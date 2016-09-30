<?php

namespace spec\MyBank;

use Bussiness\Money;
use MyStartup\Transfer;
use MyStartup\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ApiSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('MyBank\Api');
    }

    function it_should_return_users_balance(User $user, Money $balance)
    {
        $this->fetchBalance($user)->shouldReturnAnInstanceOf(Money::class);
    }

    function it_should_accept_transfer(Transfer $transfer)
    {
        $this->transfer($transfer)->shouldReturn(true);
    }
}
