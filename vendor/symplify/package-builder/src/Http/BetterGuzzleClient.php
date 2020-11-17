<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperad4b7e2c09d8\GuzzleHttp\ClientInterface;
use _PhpScoperad4b7e2c09d8\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperad4b7e2c09d8\GuzzleHttp\Psr7\Request;
use _PhpScoperad4b7e2c09d8\Nette\Utils\Json;
use _PhpScoperad4b7e2c09d8\Nette\Utils\JsonException;
use _PhpScoperad4b7e2c09d8\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperad4b7e2c09d8\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperad4b7e2c09d8\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperad4b7e2c09d8\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperad4b7e2c09d8\Nette\Utils\Json::decode($content, \_PhpScoperad4b7e2c09d8\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperad4b7e2c09d8\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperad4b7e2c09d8\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperad4b7e2c09d8\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
