<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperddde3ba4aebc\GuzzleHttp\ClientInterface;
use _PhpScoperddde3ba4aebc\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperddde3ba4aebc\GuzzleHttp\Psr7\Request;
use _PhpScoperddde3ba4aebc\Nette\Utils\Json;
use _PhpScoperddde3ba4aebc\Nette\Utils\JsonException;
use _PhpScoperddde3ba4aebc\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperddde3ba4aebc\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperddde3ba4aebc\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperddde3ba4aebc\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperddde3ba4aebc\Nette\Utils\Json::decode($content, \_PhpScoperddde3ba4aebc\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperddde3ba4aebc\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperddde3ba4aebc\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperddde3ba4aebc\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
