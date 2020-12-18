<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd8b12759ee0d\Symfony\Component\Mime;

use _PhpScoperd8b12759ee0d\Symfony\Component\Mime\Exception\LogicException;
use _PhpScoperd8b12759ee0d\Symfony\Component\Mime\Header\Headers;
use _PhpScoperd8b12759ee0d\Symfony\Component\Mime\Part\AbstractPart;
use _PhpScoperd8b12759ee0d\Symfony\Component\Mime\Part\TextPart;
/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
class Message extends \_PhpScoperd8b12759ee0d\Symfony\Component\Mime\RawMessage
{
    private $headers;
    private $body;
    public function __construct(\_PhpScoperd8b12759ee0d\Symfony\Component\Mime\Header\Headers $headers = null, \_PhpScoperd8b12759ee0d\Symfony\Component\Mime\Part\AbstractPart $body = null)
    {
        $this->headers = $headers ? clone $headers : new \_PhpScoperd8b12759ee0d\Symfony\Component\Mime\Header\Headers();
        $this->body = $body;
    }
    public function __clone()
    {
        if (null !== $this->headers) {
            $this->headers = clone $this->headers;
        }
        if (null !== $this->body) {
            $this->body = clone $this->body;
        }
    }
    /**
     * @return $this
     */
    public function setBody(\_PhpScoperd8b12759ee0d\Symfony\Component\Mime\Part\AbstractPart $body = null)
    {
        $this->body = $body;
        return $this;
    }
    public function getBody() : ?\_PhpScoperd8b12759ee0d\Symfony\Component\Mime\Part\AbstractPart
    {
        return $this->body;
    }
    /**
     * @return $this
     */
    public function setHeaders(\_PhpScoperd8b12759ee0d\Symfony\Component\Mime\Header\Headers $headers)
    {
        $this->headers = $headers;
        return $this;
    }
    public function getHeaders() : \_PhpScoperd8b12759ee0d\Symfony\Component\Mime\Header\Headers
    {
        return $this->headers;
    }
    public function getPreparedHeaders() : \_PhpScoperd8b12759ee0d\Symfony\Component\Mime\Header\Headers
    {
        $headers = clone $this->headers;
        if (!$headers->has('From')) {
            throw new \_PhpScoperd8b12759ee0d\Symfony\Component\Mime\Exception\LogicException('An email must have a "From" header.');
        }
        $headers->addTextHeader('MIME-Version', '1.0');
        if (!$headers->has('Date')) {
            $headers->addDateHeader('Date', new \DateTimeImmutable());
        }
        // determine the "real" sender
        $senders = $headers->get('From')->getAddresses();
        $sender = $senders[0];
        if ($headers->has('Sender')) {
            $sender = $headers->get('Sender')->getAddress();
        } elseif (\count($senders) > 1) {
            $headers->addMailboxHeader('Sender', $sender);
        }
        if (!$headers->has('Message-ID')) {
            $headers->addIdHeader('Message-ID', $this->generateMessageId($sender->getAddress()));
        }
        // remove the Bcc field which should NOT be part of the sent message
        $headers->remove('Bcc');
        return $headers;
    }
    public function toString() : string
    {
        if (null === ($body = $this->getBody())) {
            $body = new \_PhpScoperd8b12759ee0d\Symfony\Component\Mime\Part\TextPart('');
        }
        return $this->getPreparedHeaders()->toString() . $body->toString();
    }
    public function toIterable() : iterable
    {
        if (null === ($body = $this->getBody())) {
            $body = new \_PhpScoperd8b12759ee0d\Symfony\Component\Mime\Part\TextPart('');
        }
        (yield $this->getPreparedHeaders()->toString());
        yield from $body->toIterable();
    }
    private function generateMessageId(string $email) : string
    {
        return \bin2hex(\random_bytes(16)) . \strstr($email, '@');
    }
    /**
     * @internal
     */
    public function __serialize() : array
    {
        return [$this->headers, $this->body];
    }
    /**
     * @internal
     */
    public function __unserialize(array $data) : void
    {
        [$this->headers, $this->body] = $data;
    }
}
