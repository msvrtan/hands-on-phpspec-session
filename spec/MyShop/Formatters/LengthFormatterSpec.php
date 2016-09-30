<?php

namespace spec\MyShop\Formatters;

use Nature\Length;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LengthFormatterSpec extends ObjectBehavior
{
    function let()
    {
        $value = new Length(0.05);
        $this->beConstructedWith($value);

    }

    function it_is_initializable()
    {
        $this->shouldHaveType('MyShop\Formatters\LengthFormatter');
    }

    function it_will_return_product_length_with_centimeters_as_a_measuring_unit()
    {
        $this->formatProductLengthInCentimeters()->shouldReturn('5 cm');
    }

    function it_will_return_product_length_in_milimeters(){
        $this->formatProductLengthInMilimeters()->shouldReturn('50 mm');
    }

}
