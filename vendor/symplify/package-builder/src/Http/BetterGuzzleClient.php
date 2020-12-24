<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScopera37d6fb0b1ab\GuzzleHttp\ClientInterface;
use _PhpScopera37d6fb0b1ab\GuzzleHttp\Exception\BadResponseException;
use _PhpScopera37d6fb0b1ab\GuzzleHttp\Psr7\Request;
use _PhpScopera37d6fb0b1ab\Nette\Utils\Json;
use _PhpScopera37d6fb0b1ab\Nette\Utils\JsonException;
use _PhpScopera37d6fb0b1ab\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScopera37d6fb0b1ab\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScopera37d6fb0b1ab\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScopera37d6fb0b1ab\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScopera37d6fb0b1ab\Nette\Utils\Json::decode($content, \_PhpScopera37d6fb0b1ab\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScopera37d6fb0b1ab\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScopera37d6fb0b1ab\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScopera37d6fb0b1ab\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
