<?php

namespace spec\MyShop;

use Nature\Length;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProductLengthSpec extends ObjectBehavior
{

    function let(Length $length)
    {
        $this->beConstructedWith($length);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('MyShop\ProductLength');
    }



    function it_will_return_product_length_in_centimeters($length)
    {
        $length->getInMeters()->willReturn(3);
        $length->getInCentimeters()->willReturn(300);

        $this->getFormattedValue()->shouldReturn('300 cm');
    }





    function it_will_return_product_length_in_meters_for_large_products($length){

        $length->getInMeters()->shouldBeCalled()->willReturn(40);
        $length->getInCentimeters()->shouldNotBeCalled()->willReturn(4000);

        $this->getFormattedValue()->shouldReturn('40 m');
    }
}
