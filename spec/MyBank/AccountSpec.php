<?php

namespace spec\MyBank;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AccountSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('account-number', 'balance');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('MyBank\Account');
    }

    function it_will_return_account_number()
    {
        $this->getAccountNumber()->shouldReturn('account-number');
    }

    function it_will_return_balance()
    {
        $this->getBalance()->shouldReturn('balance');
    }

    function it_knows_if_account_amount_is_rounded_or_not()
    {
        $this->isAccountRounded();
    }

    function it_can_calculate_rounded_amount(){
        $this->getRoundedAmount();
    }
}
