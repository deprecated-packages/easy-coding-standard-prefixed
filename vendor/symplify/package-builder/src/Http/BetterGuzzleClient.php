<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperfaaf57618f34\GuzzleHttp\ClientInterface;
use _PhpScoperfaaf57618f34\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperfaaf57618f34\GuzzleHttp\Psr7\Request;
use _PhpScoperfaaf57618f34\Nette\Utils\Json;
use _PhpScoperfaaf57618f34\Nette\Utils\JsonException;
use _PhpScoperfaaf57618f34\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperfaaf57618f34\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperfaaf57618f34\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperfaaf57618f34\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperfaaf57618f34\Nette\Utils\Json::decode($content, \_PhpScoperfaaf57618f34\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperfaaf57618f34\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperfaaf57618f34\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperfaaf57618f34\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
