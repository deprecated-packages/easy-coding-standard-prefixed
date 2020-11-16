<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperdf6a0b341030\GuzzleHttp\ClientInterface;
use _PhpScoperdf6a0b341030\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperdf6a0b341030\GuzzleHttp\Psr7\Request;
use _PhpScoperdf6a0b341030\Nette\Utils\Json;
use _PhpScoperdf6a0b341030\Nette\Utils\JsonException;
use _PhpScoperdf6a0b341030\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperdf6a0b341030\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperdf6a0b341030\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperdf6a0b341030\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperdf6a0b341030\Nette\Utils\Json::decode($content, \_PhpScoperdf6a0b341030\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperdf6a0b341030\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperdf6a0b341030\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperdf6a0b341030\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
