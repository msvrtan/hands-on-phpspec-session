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

    function it_will_return_length_in_centimeters()
    {
        $this->getLengthInCentimeters()->shouldReturn(100.00);
    }

    function it_will_return_length_in_meters()
    {
        $this->getLengthInMeters()->shouldReturn(1.0);
    }

    function it_will_return_length_in_meters_even_if_input_was_a_string()
    {
        $this->beConstructedWith('1');
        $this->getLengthInMeters()->shouldReturn(1.0);
    }

    function it_will_return_length_in_meters_for_values_for_floats()
    {
        $this->beConstructedWith(1.4);
        $this->getLengthInMeters()->shouldReturn(1.4);
    }

    function it_will_return_length_in_milimeters()
    {
        $this->getLengthInMilimeters()->shouldReturn(1000.00);
    }

    function it_will_return_length_in_feet()
    {
        $this->getLengthInFeet()->shouldReturn(3.28);
    }
}
