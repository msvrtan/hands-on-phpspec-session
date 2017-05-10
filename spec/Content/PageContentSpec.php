<?php

namespace spec\Content;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PageContentSpec extends ObjectBehavior
{
    function let(){
        $this->beConstructedWith('some string looking like content');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Content\PageContent');
    }
}
