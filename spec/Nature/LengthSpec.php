<?php

namespace spec\Nature;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LengthSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(1);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Nature\Length');
    }

    function it_should_return_length_in_meters()
    {
        $this->inMeters()->shouldReturn(1);
    }

    function it_should_return_length_in_centimiters()
    {
        $this->inCentimiters()->shouldReturn(100);
    }

    function it_should_return_length_in_milimiters()
    {
        $this->inMilimiters()->shouldReturn(1000);
    }
}
