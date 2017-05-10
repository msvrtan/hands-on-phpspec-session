<?php

namespace spec\Content;

use Content\PageContent;
use Content\RetrievalId;
use Http\Url;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PageSpec extends ObjectBehavior
{

    function let(RetrievalId $id, Url $url, PageContent $content)
    {
        $this->beConstructedWith($id, $url, $content, $timestamp = 11101929129192);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Content\Page');
    }
}
