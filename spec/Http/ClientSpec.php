<?php

namespace spec\Http;

use Http\Url;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ClientSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Http\Client');
    }

    function it_should_get_remote_content_from_given_url(Url $url)
    {
        $this->getRemoteContent($url)->shouldReturn('');
    }
}
