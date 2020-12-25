<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoper745103eaabcd\GuzzleHttp\ClientInterface;
use _PhpScoper745103eaabcd\GuzzleHttp\Exception\BadResponseException;
use _PhpScoper745103eaabcd\GuzzleHttp\Psr7\Request;
use _PhpScoper745103eaabcd\Nette\Utils\Json;
use _PhpScoper745103eaabcd\Nette\Utils\JsonException;
use _PhpScoper745103eaabcd\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoper745103eaabcd\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoper745103eaabcd\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoper745103eaabcd\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoper745103eaabcd\Nette\Utils\Json::decode($content, \_PhpScoper745103eaabcd\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoper745103eaabcd\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoper745103eaabcd\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoper745103eaabcd\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
