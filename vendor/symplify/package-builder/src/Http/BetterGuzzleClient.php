<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoper589e8c04a9ef\GuzzleHttp\ClientInterface;
use _PhpScoper589e8c04a9ef\GuzzleHttp\Exception\BadResponseException;
use _PhpScoper589e8c04a9ef\GuzzleHttp\Psr7\Request;
use _PhpScoper589e8c04a9ef\Nette\Utils\Json;
use _PhpScoper589e8c04a9ef\Nette\Utils\JsonException;
use _PhpScoper589e8c04a9ef\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoper589e8c04a9ef\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoper589e8c04a9ef\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoper589e8c04a9ef\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoper589e8c04a9ef\Nette\Utils\Json::decode($content, \_PhpScoper589e8c04a9ef\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoper589e8c04a9ef\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoper589e8c04a9ef\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoper589e8c04a9ef\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
