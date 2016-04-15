<?php

namespace spec\MyBank;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BankServiceAPISpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('MyBank\BankServiceAPI');
    }

    function it_should_return_users_subscribed_to_our_cool_feature()
    {
        $this->getSubscribedUsers()->shouldReturn([]);
    }

    function it_will_transfer_money()
    {
        $this->transferMoney('from', 'to', 0.6);
    }
}
