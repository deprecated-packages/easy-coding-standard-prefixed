<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperedc2e0c967db\GuzzleHttp\ClientInterface;
use _PhpScoperedc2e0c967db\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperedc2e0c967db\GuzzleHttp\Psr7\Request;
use _PhpScoperedc2e0c967db\Nette\Utils\Json;
use _PhpScoperedc2e0c967db\Nette\Utils\JsonException;
use _PhpScoperedc2e0c967db\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperedc2e0c967db\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperedc2e0c967db\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperedc2e0c967db\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperedc2e0c967db\Nette\Utils\Json::decode($content, \_PhpScoperedc2e0c967db\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperedc2e0c967db\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperedc2e0c967db\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperedc2e0c967db\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
