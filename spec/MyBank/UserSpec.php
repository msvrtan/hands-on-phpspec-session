<?php

namespace spec\MyBank;

use MyBank\Account;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserSpec extends ObjectBehavior
{
    function let(Account $checkingAccount, Account $savingsAccount)
    {
        $this->beConstructedWith('user-id', $checkingAccount, $savingsAccount);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('MyBank\User');
    }

    function it_supports_checking_account($checkingAccount)
    {
        $this->getCheckingAccount()->shouldReturn($checkingAccount);
    }

    function it_returns_savings_account($savingsAccount)
    {
        $this->getSavingsAccount()->shouldReturn($savingsAccount);
    }

    function it_knows_if_checking_account_is_not_rounded($checkingAccount)
    {
        $checkingAccount->isAccountRounded()->willReturn(true);
        $this->isCheckingAccountRounded()->shouldReturn(true);
    }

    function it_returns_checking_account_number($checkingAccount)
    {
        $checkingAccount->getAccountNumber()->willReturn('bank-acc-number');
        $this->getCheckingAccountNumber()->shouldReturn('bank-acc-number');
    }

    function it_returns_savings_account_number($savingsAccount)
    {
        $savingsAccount->getAccountNumber()->willReturn('bank-acc-number');
        $this->getSavingsAccountNumber()->shouldReturn('bank-acc-number');
    }

    function it_returns_amount_to_move_to_savings($checkingAccount)
    {

        $checkingAccount->getRoundedAmount()->willReturn(0.5);
        $this->getAmountToSavings()->shouldReturn(0.5);
    }
}
