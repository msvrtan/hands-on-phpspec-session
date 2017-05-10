<?php

namespace spec\Content;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RetrievalIdSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Content\RetrievalId');
    }
}
