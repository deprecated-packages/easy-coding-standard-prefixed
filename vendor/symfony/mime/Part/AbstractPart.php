<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper7312d63d356f\Symfony\Component\Mime\Part;

use _PhpScoper7312d63d356f\Symfony\Component\Mime\Header\Headers;
/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
abstract class AbstractPart
{
    private $headers;
    public function __construct()
    {
        $this->headers = new \_PhpScoper7312d63d356f\Symfony\Component\Mime\Header\Headers();
    }
    public function getHeaders() : \_PhpScoper7312d63d356f\Symfony\Component\Mime\Header\Headers
    {
        return $this->headers;
    }
    public function getPreparedHeaders() : \_PhpScoper7312d63d356f\Symfony\Component\Mime\Header\Headers
    {
        $headers = clone $this->headers;
        $headers->setHeaderBody('Parameterized', 'Content-Type', $this->getMediaType() . '/' . $this->getMediaSubtype());
        return $headers;
    }
    public function toString() : string
    {
        return $this->getPreparedHeaders()->toString() . "\r\n" . $this->bodyToString();
    }
    public function toIterable() : iterable
    {
        (yield $this->getPreparedHeaders()->toString());
        (yield "\r\n");
        yield from $this->bodyToIterable();
    }
    public abstract function bodyToString() : string;
    public abstract function bodyToIterable() : iterable;
    public abstract function getMediaType() : string;
    public abstract function getMediaSubtype() : string;
}
