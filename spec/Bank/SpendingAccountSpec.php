<?php

namespace spec\Bank;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SpendingAccountSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Bank\SpendingAccount');
    }
}
