<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoper21c6ce8bfe5d\GuzzleHttp\ClientInterface;
use _PhpScoper21c6ce8bfe5d\GuzzleHttp\Exception\BadResponseException;
use _PhpScoper21c6ce8bfe5d\GuzzleHttp\Psr7\Request;
use _PhpScoper21c6ce8bfe5d\Nette\Utils\Json;
use _PhpScoper21c6ce8bfe5d\Nette\Utils\JsonException;
use _PhpScoper21c6ce8bfe5d\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoper21c6ce8bfe5d\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoper21c6ce8bfe5d\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoper21c6ce8bfe5d\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoper21c6ce8bfe5d\Nette\Utils\Json::decode($content, \_PhpScoper21c6ce8bfe5d\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoper21c6ce8bfe5d\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoper21c6ce8bfe5d\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoper21c6ce8bfe5d\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
