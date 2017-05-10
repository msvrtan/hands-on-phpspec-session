<?php

namespace spec\Content;

use Content\PageContent;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PageContentFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Content\PageContentFactory');
    }

    function it_will_build_a_page_content_object_from_given_string()
    {
        $this->create('some string')->shouldReturnAnInstanceOf(PageContent::class);
    }
}
