<?php

namespace spec\MyStartup;

use Bussiness\Money;
use MyBank\Accounts\SavingsAccount;
use MyBank\Accounts\SpendingAccount;
use MyBank\Api;
use MyStartup\Transfer;
use MyStartup\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ControllerSpec extends ObjectBehavior
{
    function let(Api $bankApi, User $user)
    {
        $this->beConstructedWith($bankApi, $user);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('MyStartup\Controller');
    }

    function it_should_not_transfer_since_there_are_no_cents($bankApi, $user, Money $currentBalance)
    {
        $bankApi->fetchBalance($user)->shouldBeCalled()->willReturn($currentBalance);
        $currentBalance->hasCents()->shouldBeCalled()->willReturn(false);
        $this->doWork()->shouldReturn(false);
    }

    function it_should_check_for_cents_and_transfer_if_any_found(
        $bankApi,
        User $user,
        Money $currentBalance,
        SavingsAccount $savingsAccount,
        SpendingAccount $spendingAccount
    ) {

        $bankApi->fetchBalance($user)->shouldBeCalled()->willReturn($currentBalance);

        $currentBalance->hasCents()->shouldBeCalled()->willReturn(true);

        $currentBalance->getCents()->shouldBeCalled()->willReturn(11);

        $user->getSavingsAccount()->willReturn($savingsAccount);
        $user->getSpendingAccount()->willReturn($spendingAccount);

        $bankApi->transfer(Argument::type(Transfer::class))->shouldBeCalled();

        $this->doWork()->shouldReturn(true);
    }

}
