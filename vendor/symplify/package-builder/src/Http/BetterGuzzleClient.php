<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperc75fd40d7a6e\GuzzleHttp\ClientInterface;
use _PhpScoperc75fd40d7a6e\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperc75fd40d7a6e\GuzzleHttp\Psr7\Request;
use _PhpScoperc75fd40d7a6e\Nette\Utils\Json;
use _PhpScoperc75fd40d7a6e\Nette\Utils\JsonException;
use _PhpScoperc75fd40d7a6e\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperc75fd40d7a6e\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperc75fd40d7a6e\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperc75fd40d7a6e\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperc75fd40d7a6e\Nette\Utils\Json::decode($content, \_PhpScoperc75fd40d7a6e\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperc75fd40d7a6e\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperc75fd40d7a6e\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperc75fd40d7a6e\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
