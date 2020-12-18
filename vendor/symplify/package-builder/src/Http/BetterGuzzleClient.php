<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperd8b12759ee0d\GuzzleHttp\ClientInterface;
use _PhpScoperd8b12759ee0d\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperd8b12759ee0d\GuzzleHttp\Psr7\Request;
use _PhpScoperd8b12759ee0d\Nette\Utils\Json;
use _PhpScoperd8b12759ee0d\Nette\Utils\JsonException;
use _PhpScoperd8b12759ee0d\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperd8b12759ee0d\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperd8b12759ee0d\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperd8b12759ee0d\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperd8b12759ee0d\Nette\Utils\Json::decode($content, \_PhpScoperd8b12759ee0d\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperd8b12759ee0d\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperd8b12759ee0d\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperd8b12759ee0d\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
