<?php

namespace spec\MyBank;

use MyBank\Account;
use MyBank\BankServiceAPI;
use MyBank\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SavingsServiceSpec extends ObjectBehavior
{
    function let(BankServiceAPI $api)
    {
        $this->beConstructedWith($api);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('MyBank\SavingsService');
    }

    function it_should_manage_users_savings_plan(
        $api,
        User $user1,
        User $user2,
        Account $checkingAccountUser1,
        Account $savingsAccountUser1
    ) {
        $user1->isCheckingAccountRounded()->willReturn(false)->shouldBeCalled();
        $user2->isCheckingAccountRounded()->willReturn(true)->shouldBeCalled();

        $user1->getCheckingAccount()->willReturn($checkingAccountUser1);
        $user1->getSavingsAccount()->willReturn($savingsAccountUser1);

        $checkingAccountUser1->getAccountNumber()->willReturn('user1-checking-acc')->shouldBeCalled();
        $savingsAccountUser1->getAccountNumber()->willReturn('user1-savings-acc')->shouldBeCalled();
        $user1->getAmountToSavings()->willReturn(0.11)->shouldBeCalled();

        $api->getSubscribedUsers()->willReturn([$user1, $user2]);

        $api->transferMoney('user1-checking-acc', 'user1-savings-acc', 0.11)->shouldBeCalled();

        $this->doWork();
    }
}
