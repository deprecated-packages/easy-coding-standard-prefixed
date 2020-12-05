<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoper81b3ff5ab9fe\GuzzleHttp\ClientInterface;
use _PhpScoper81b3ff5ab9fe\GuzzleHttp\Exception\BadResponseException;
use _PhpScoper81b3ff5ab9fe\GuzzleHttp\Psr7\Request;
use _PhpScoper81b3ff5ab9fe\Nette\Utils\Json;
use _PhpScoper81b3ff5ab9fe\Nette\Utils\JsonException;
use _PhpScoper81b3ff5ab9fe\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoper81b3ff5ab9fe\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoper81b3ff5ab9fe\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoper81b3ff5ab9fe\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoper81b3ff5ab9fe\Nette\Utils\Json::decode($content, \_PhpScoper81b3ff5ab9fe\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoper81b3ff5ab9fe\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoper81b3ff5ab9fe\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoper81b3ff5ab9fe\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
