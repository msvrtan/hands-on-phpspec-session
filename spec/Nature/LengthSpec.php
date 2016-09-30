<?php

namespace spec\Nature;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LengthSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(11);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Nature\Length');
    }

    function it_will_return_injected_value()
    {
        $this->getInjectedValue()->shouldReturn(11);
    }

    function it_will_return_value_in_centimeters()
    {
        $this->getInCentimeters()->shouldReturn(1100);
    }

    function it_will_return_value_in_milimeters()
    {
        $this->getInMilimeters()->shouldReturn(11000);
    }
}
