<?php

namespace spec\Nature;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LengthSpec extends ObjectBehavior
{

    function let()
    {
        $this->beConstructedWith(5);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Nature\Length');
    }

    function it_will_return_value_in_meters(){
        $this->getInMeters()->shouldReturn(5);
    }
    function it_will_return_value_in_centimeters(){
        $this->getInCentimeters()->shouldReturn(500);
    }
}
