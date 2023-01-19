<?php

namespace Spatie\Crawler\Test\TestClasses;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;
use Spatie\Crawler\CrawlObservers\CrawlObserver;

class ModifyCrawIUrl extends CrawlObserver
{
    public function modifyCrawlUrl(UriInterface $url): UriInterface
    {
        return Uri::withQueryValues($url, ['dummy' => '123']);
    }

    public function crawled(UriInterface $url, ResponseInterface $response, ?UriInterface $foundOnUrl = null)
    {
        // TODO: Implement crawled() method.
    }

    public function crawlFailed(UriInterface $url, RequestException $requestException, ?UriInterface $foundOnUrl = null)
    {
        // TODO: Implement crawlFailed() method.
    }
}
