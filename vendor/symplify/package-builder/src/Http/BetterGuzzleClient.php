<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperecb978830f1e\GuzzleHttp\ClientInterface;
use _PhpScoperecb978830f1e\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperecb978830f1e\GuzzleHttp\Psr7\Request;
use _PhpScoperecb978830f1e\Nette\Utils\Json;
use _PhpScoperecb978830f1e\Nette\Utils\JsonException;
use _PhpScoperecb978830f1e\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperecb978830f1e\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperecb978830f1e\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperecb978830f1e\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperecb978830f1e\Nette\Utils\Json::decode($content, \_PhpScoperecb978830f1e\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperecb978830f1e\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperecb978830f1e\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperecb978830f1e\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
