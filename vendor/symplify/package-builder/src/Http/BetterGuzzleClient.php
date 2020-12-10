<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoper58a0a169dcfb\GuzzleHttp\ClientInterface;
use _PhpScoper58a0a169dcfb\GuzzleHttp\Exception\BadResponseException;
use _PhpScoper58a0a169dcfb\GuzzleHttp\Psr7\Request;
use _PhpScoper58a0a169dcfb\Nette\Utils\Json;
use _PhpScoper58a0a169dcfb\Nette\Utils\JsonException;
use _PhpScoper58a0a169dcfb\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoper58a0a169dcfb\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoper58a0a169dcfb\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoper58a0a169dcfb\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoper58a0a169dcfb\Nette\Utils\Json::decode($content, \_PhpScoper58a0a169dcfb\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoper58a0a169dcfb\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoper58a0a169dcfb\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoper58a0a169dcfb\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
