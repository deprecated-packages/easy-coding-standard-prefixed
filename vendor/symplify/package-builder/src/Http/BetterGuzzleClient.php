<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoper528afa732cbd\GuzzleHttp\ClientInterface;
use _PhpScoper528afa732cbd\GuzzleHttp\Exception\BadResponseException;
use _PhpScoper528afa732cbd\GuzzleHttp\Psr7\Request;
use _PhpScoper528afa732cbd\Nette\Utils\Json;
use _PhpScoper528afa732cbd\Nette\Utils\JsonException;
use _PhpScoper528afa732cbd\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoper528afa732cbd\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoper528afa732cbd\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoper528afa732cbd\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoper528afa732cbd\Nette\Utils\Json::decode($content, \_PhpScoper528afa732cbd\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoper528afa732cbd\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoper528afa732cbd\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoper528afa732cbd\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
