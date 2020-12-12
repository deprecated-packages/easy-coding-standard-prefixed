<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperef870243cfdb\GuzzleHttp\ClientInterface;
use _PhpScoperef870243cfdb\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperef870243cfdb\GuzzleHttp\Psr7\Request;
use _PhpScoperef870243cfdb\Nette\Utils\Json;
use _PhpScoperef870243cfdb\Nette\Utils\JsonException;
use _PhpScoperef870243cfdb\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperef870243cfdb\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperef870243cfdb\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperef870243cfdb\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperef870243cfdb\Nette\Utils\Json::decode($content, \_PhpScoperef870243cfdb\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperef870243cfdb\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperef870243cfdb\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperef870243cfdb\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
