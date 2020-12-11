<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperb26833cc184d\GuzzleHttp\ClientInterface;
use _PhpScoperb26833cc184d\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperb26833cc184d\GuzzleHttp\Psr7\Request;
use _PhpScoperb26833cc184d\Nette\Utils\Json;
use _PhpScoperb26833cc184d\Nette\Utils\JsonException;
use _PhpScoperb26833cc184d\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperb26833cc184d\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperb26833cc184d\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperb26833cc184d\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperb26833cc184d\Nette\Utils\Json::decode($content, \_PhpScoperb26833cc184d\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperb26833cc184d\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperb26833cc184d\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperb26833cc184d\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
