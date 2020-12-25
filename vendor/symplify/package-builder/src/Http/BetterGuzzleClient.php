<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoper64ca614e27fd\GuzzleHttp\ClientInterface;
use _PhpScoper64ca614e27fd\GuzzleHttp\Exception\BadResponseException;
use _PhpScoper64ca614e27fd\GuzzleHttp\Psr7\Request;
use _PhpScoper64ca614e27fd\Nette\Utils\Json;
use _PhpScoper64ca614e27fd\Nette\Utils\JsonException;
use _PhpScoper64ca614e27fd\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoper64ca614e27fd\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoper64ca614e27fd\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoper64ca614e27fd\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoper64ca614e27fd\Nette\Utils\Json::decode($content, \_PhpScoper64ca614e27fd\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoper64ca614e27fd\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoper64ca614e27fd\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoper64ca614e27fd\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
