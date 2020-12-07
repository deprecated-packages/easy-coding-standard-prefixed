<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperda2604e33acb\GuzzleHttp\ClientInterface;
use _PhpScoperda2604e33acb\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperda2604e33acb\GuzzleHttp\Psr7\Request;
use _PhpScoperda2604e33acb\Nette\Utils\Json;
use _PhpScoperda2604e33acb\Nette\Utils\JsonException;
use _PhpScoperda2604e33acb\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperda2604e33acb\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperda2604e33acb\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperda2604e33acb\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperda2604e33acb\Nette\Utils\Json::decode($content, \_PhpScoperda2604e33acb\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperda2604e33acb\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperda2604e33acb\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperda2604e33acb\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
