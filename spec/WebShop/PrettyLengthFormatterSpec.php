<?php

namespace spec\WebShop;

use Nature\Length;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrettyLengthFormatterSpec extends ObjectBehavior
{
    function let(Length $length)
    {
        $this->beConstructedWith($length);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('WebShop\PrettyLengthFormatter');
    }

    function it_will_return_values_in_centimeters_when_lenght_less_then_a_meter($length)
    {
        $length->inMeters()->shouldBeCalled()->willReturn(0.7);
        $length->inCentimiters()->shouldBeCalled()->willReturn(70);
        $this->format()->shouldReturn('70cm');
    }

    function it_will_return_values_in_meters_when_lenght_more_then_a_meter($length)
    {
        $length->inMeters()->shouldBeCalled()->willReturn(2);
        $this->format()->shouldReturn('2m');

    }
}