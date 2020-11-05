<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperdebd9d705540\GuzzleHttp\ClientInterface;
use _PhpScoperdebd9d705540\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperdebd9d705540\GuzzleHttp\Psr7\Request;
use _PhpScoperdebd9d705540\Nette\Utils\Json;
use _PhpScoperdebd9d705540\Nette\Utils\JsonException;
use _PhpScoperdebd9d705540\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperdebd9d705540\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperdebd9d705540\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperdebd9d705540\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperdebd9d705540\Nette\Utils\Json::decode($content, \_PhpScoperdebd9d705540\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperdebd9d705540\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperdebd9d705540\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperdebd9d705540\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
