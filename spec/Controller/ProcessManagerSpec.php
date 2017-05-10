<?php

namespace spec\Controller;

use Content\Fetcher\CoolSimpleFetcher;
use Content\Page;
use Content\PageContent;
use Http\Url;
use ORM\EntityManager;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProcessManagerSpec extends ObjectBehavior
{

    function let(EntityManager $entityManager, CoolSimpleFetcher $fetcher)
    {
        $this->beConstructedWith($entityManager, $fetcher);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Controller\ProcessManager');
    }

    function it_will_iterate_thru_given_urls(
        Url $url1,
        Url $url2,
        $fetcher,
        PageContent $pageContent1,
        PageContent $pageContent2,
        $entityManager
    ) {
        $fetcher->fetch($url1)->shouldBeCalled()->willReturn($pageContent1);
        $fetcher->fetch($url2)->shouldBeCalled()->willReturn($pageContent2);

        $entityManager->save(Argument::type(Page::class))->shouldBeCalled();
        $this->doWork([$url1, $url2]);
    }
}
