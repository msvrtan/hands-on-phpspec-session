<?php

namespace spec\MyShop\LengthFormatter;

use Nature\Length;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NiceLengthFormatterSpec extends ObjectBehavior
{

    function let(Length $length)
    {
        $this->beConstructedWith($length);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('MyShop\LengthFormatter\NiceLengthFormatter');
    }

    function it_will_return_length_in_meters_for_product($length)
    {
        $length->getLengthInMilimeters()->willReturn(1000)->shouldBeCalled();
        $length->getLengthInCentimeters()->willReturn(100)->shouldBeCalled();
        $length->getLengthInMeters()->willReturn(1);
        $this->getLength()->shouldReturn('1m');
    }

    function it_will_return_length_in_milimmeters_for_products_smaller_than_1cm($length)
    {
        $length->getLengthInMilimeters()->willReturn(5)->shouldBeCalled();
        $this->getLength()->shouldReturn('5mm');
    }

    function it_will_return_length_in_lot_of_meters_for_enormous_products($length)
    {
        $length->getLengthInMilimeters()->willReturn(5000000)->shouldBeCalled();
        $length->getLengthInMeters()->willReturn(500)->shouldBeCalled();
        $length->getLengthInCentimeters()->willReturn(5000)->shouldBeCalled();
        $this->getLength()->shouldReturn('500m');
    }

    function it_will_return_length_in_centimmeters_for_products_smaller_than_1m($length)
    {
        $length->getLengthInMilimeters()->willReturn(500)->shouldBeCalled();
        $length->getLengthInCentimeters()->willReturn(50)->shouldBeCalled();
        $this->getLength()->shouldReturn('50cm');
    }

}
