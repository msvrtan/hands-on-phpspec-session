<?php

namespace Content;

use Http\Url;

class Page
{
    /**
     * @var RetrievalId
     */
    private $id;
    /**
     * @var Url
     */
    private $url;
    /**
     * @var PageContent
     */
    private $content;
    /**
     * @var int
     */
    private $timestamp;

    public function __construct(RetrievalId $id, Url $url, PageContent $content, int $timestamp)
    {
        $this->id = $id;
        $this->url = $url;
        $this->content = $content;
        $this->timestamp = $timestamp;
    }
}
