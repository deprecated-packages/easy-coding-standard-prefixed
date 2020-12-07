<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperb73f9e44f4eb\GuzzleHttp\ClientInterface;
use _PhpScoperb73f9e44f4eb\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperb73f9e44f4eb\GuzzleHttp\Psr7\Request;
use _PhpScoperb73f9e44f4eb\Nette\Utils\Json;
use _PhpScoperb73f9e44f4eb\Nette\Utils\JsonException;
use _PhpScoperb73f9e44f4eb\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperb73f9e44f4eb\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperb73f9e44f4eb\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperb73f9e44f4eb\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperb73f9e44f4eb\Nette\Utils\Json::decode($content, \_PhpScoperb73f9e44f4eb\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperb73f9e44f4eb\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperb73f9e44f4eb\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperb73f9e44f4eb\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
