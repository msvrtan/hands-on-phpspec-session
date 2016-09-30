<?php

namespace spec\Bussiness;

use Bussiness\Money;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MoneySpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(100, 'EUR');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Bussiness\Money');
    }

    function it_has_cents()
    {
        $this->hasCents()->shouldReturn(false);
    }

    function it_returns_cents()
    {
        $result = $this->getCents();

        $result->shouldBeAnInstanceOf(Money::class);

        $result->getAmount()->shouldReturn(0);
    }

    function it_returns_amount()
    {
        $this->getAmount()->shouldReturn(100);
    }
}
