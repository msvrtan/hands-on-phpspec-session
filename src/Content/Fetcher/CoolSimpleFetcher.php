<?php

namespace Content\Fetcher;

use Content\PageContent;
use Content\PageContentFactory;
use Http\Client;
use Http\Url;

class CoolSimpleFetcher
{
    /**
     * @var Client
     */
    private $client;
    /**
     * @var PageContentFactory
     */
    private $factory;

    public function __construct(Client $client,PageContentFactory $factory)
    {
        $this->client = $client;
        $this->factory = $factory;
    }

    public function fetch(Url $url)
    {
        $content = $this->client->getRemoteContent($url);

        return $this->factory->create($content);
    }
}
