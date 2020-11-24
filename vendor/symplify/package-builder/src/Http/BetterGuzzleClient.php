<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperfd70a7e8e84f\GuzzleHttp\ClientInterface;
use _PhpScoperfd70a7e8e84f\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperfd70a7e8e84f\GuzzleHttp\Psr7\Request;
use _PhpScoperfd70a7e8e84f\Nette\Utils\Json;
use _PhpScoperfd70a7e8e84f\Nette\Utils\JsonException;
use _PhpScoperfd70a7e8e84f\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperfd70a7e8e84f\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperfd70a7e8e84f\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperfd70a7e8e84f\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperfd70a7e8e84f\Nette\Utils\Json::decode($content, \_PhpScoperfd70a7e8e84f\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperfd70a7e8e84f\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperfd70a7e8e84f\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperfd70a7e8e84f\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
