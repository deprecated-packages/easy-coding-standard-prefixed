<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperfb2c402b972b\GuzzleHttp\ClientInterface;
use _PhpScoperfb2c402b972b\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperfb2c402b972b\GuzzleHttp\Psr7\Request;
use _PhpScoperfb2c402b972b\Nette\Utils\Json;
use _PhpScoperfb2c402b972b\Nette\Utils\JsonException;
use _PhpScoperfb2c402b972b\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperfb2c402b972b\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperfb2c402b972b\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperfb2c402b972b\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperfb2c402b972b\Nette\Utils\Json::decode($content, \_PhpScoperfb2c402b972b\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperfb2c402b972b\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperfb2c402b972b\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperfb2c402b972b\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
