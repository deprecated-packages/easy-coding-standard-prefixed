<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScopercda2b863d098\GuzzleHttp\ClientInterface;
use _PhpScopercda2b863d098\GuzzleHttp\Exception\BadResponseException;
use _PhpScopercda2b863d098\GuzzleHttp\Psr7\Request;
use _PhpScopercda2b863d098\Nette\Utils\Json;
use _PhpScopercda2b863d098\Nette\Utils\JsonException;
use _PhpScopercda2b863d098\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScopercda2b863d098\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScopercda2b863d098\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScopercda2b863d098\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScopercda2b863d098\Nette\Utils\Json::decode($content, \_PhpScopercda2b863d098\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScopercda2b863d098\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScopercda2b863d098\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScopercda2b863d098\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
