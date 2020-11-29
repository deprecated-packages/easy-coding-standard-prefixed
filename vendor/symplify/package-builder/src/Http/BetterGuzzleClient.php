<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScopercae980ebf12d\GuzzleHttp\ClientInterface;
use _PhpScopercae980ebf12d\GuzzleHttp\Exception\BadResponseException;
use _PhpScopercae980ebf12d\GuzzleHttp\Psr7\Request;
use _PhpScopercae980ebf12d\Nette\Utils\Json;
use _PhpScopercae980ebf12d\Nette\Utils\JsonException;
use _PhpScopercae980ebf12d\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScopercae980ebf12d\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScopercae980ebf12d\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScopercae980ebf12d\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScopercae980ebf12d\Nette\Utils\Json::decode($content, \_PhpScopercae980ebf12d\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScopercae980ebf12d\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScopercae980ebf12d\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScopercae980ebf12d\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
