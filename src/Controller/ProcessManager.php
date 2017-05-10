<?php

namespace Controller;

use Content\Fetcher\CoolSimpleFetcher;
use Content\Page;
use Content\RetrievalId;
use ORM\EntityManager;

class ProcessManager
{
    /**
     * @var CoolSimpleFetcher
     */
    private $fetcher;
    /**
     * @var EntityManager
     */
    private $entityManager;

    public function __construct(EntityManager $entityManager, CoolSimpleFetcher $fetcher)
    {
        // TODO: write logic here
        $this->fetcher = $fetcher;
        $this->entityManager = $entityManager;
    }

    public function doWork(array $urls)
    {
        foreach ($urls as $url) {
            $pageContent = $this->fetcher->fetch($url);

            $page = new Page(new RetrievalId(), $url, $pageContent, time());

            $this->entityManager->save($page);
        }
    }
}
