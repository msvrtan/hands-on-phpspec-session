<?php

namespace Content;

class PageContentFactory
{
    public function create(string $content)
    {
        return new PageContent($content);
    }
}
