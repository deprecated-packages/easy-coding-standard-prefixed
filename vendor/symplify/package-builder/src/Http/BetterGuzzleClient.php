<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperea337ed74749\GuzzleHttp\ClientInterface;
use _PhpScoperea337ed74749\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperea337ed74749\GuzzleHttp\Psr7\Request;
use _PhpScoperea337ed74749\Nette\Utils\Json;
use _PhpScoperea337ed74749\Nette\Utils\JsonException;
use _PhpScoperea337ed74749\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperea337ed74749\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperea337ed74749\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperea337ed74749\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperea337ed74749\Nette\Utils\Json::decode($content, \_PhpScoperea337ed74749\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperea337ed74749\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperea337ed74749\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperea337ed74749\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
