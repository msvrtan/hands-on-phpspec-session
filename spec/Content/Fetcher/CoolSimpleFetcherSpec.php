<?php

namespace spec\Content\Fetcher;

use Content\PageContent;
use Content\PageContentFactory;
use Http\Client;
use Http\Url;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CoolSimpleFetcherSpec extends ObjectBehavior
{
    function let(Client $client, PageContentFactory $factory)
    {
        $this->beConstructedWith($client, $factory);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Content\Fetcher\CoolSimpleFetcher');
    }

    function it_should_fetch_content(Url $url, $client, PageContent $pageContent, $factory)
    {
        $client->getRemoteContent($url)->shouldBeCalled()->willReturn('some content');
        $factory->create('some content')->shouldBeCalled()->willReturn($pageContent);

        $this->fetch($url)->shouldReturn($pageContent);
    }
}
