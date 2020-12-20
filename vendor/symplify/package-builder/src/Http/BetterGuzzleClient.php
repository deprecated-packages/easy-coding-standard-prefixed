<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperba24099fc6fd\GuzzleHttp\ClientInterface;
use _PhpScoperba24099fc6fd\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperba24099fc6fd\GuzzleHttp\Psr7\Request;
use _PhpScoperba24099fc6fd\Nette\Utils\Json;
use _PhpScoperba24099fc6fd\Nette\Utils\JsonException;
use _PhpScoperba24099fc6fd\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperba24099fc6fd\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperba24099fc6fd\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperba24099fc6fd\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperba24099fc6fd\Nette\Utils\Json::decode($content, \_PhpScoperba24099fc6fd\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperba24099fc6fd\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperba24099fc6fd\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperba24099fc6fd\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
