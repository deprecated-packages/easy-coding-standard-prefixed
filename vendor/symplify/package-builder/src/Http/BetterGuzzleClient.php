<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoper6db4fde00cda\GuzzleHttp\ClientInterface;
use _PhpScoper6db4fde00cda\GuzzleHttp\Exception\BadResponseException;
use _PhpScoper6db4fde00cda\GuzzleHttp\Psr7\Request;
use _PhpScoper6db4fde00cda\Nette\Utils\Json;
use _PhpScoper6db4fde00cda\Nette\Utils\JsonException;
use _PhpScoper6db4fde00cda\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoper6db4fde00cda\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoper6db4fde00cda\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoper6db4fde00cda\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoper6db4fde00cda\Nette\Utils\Json::decode($content, \_PhpScoper6db4fde00cda\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoper6db4fde00cda\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoper6db4fde00cda\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoper6db4fde00cda\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
