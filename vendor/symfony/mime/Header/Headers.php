<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere015d8a3273c\Symfony\Component\Mime\Header;

use _PhpScopere015d8a3273c\Symfony\Component\Mime\Address;
use _PhpScopere015d8a3273c\Symfony\Component\Mime\Exception\LogicException;
use _PhpScopere015d8a3273c\Symfony\Component\Mime\NamedAddress;
/**
 * A collection of headers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class Headers
{
    private static $uniqueHeaders = ['date', 'from', 'sender', 'reply-to', 'to', 'cc', 'bcc', 'message-id', 'in-reply-to', 'references', 'subject'];
    private $headers = [];
    private $lineLength = 76;
    public function __construct(\_PhpScopere015d8a3273c\Symfony\Component\Mime\Header\HeaderInterface ...$headers)
    {
        foreach ($headers as $header) {
            $this->add($header);
        }
    }
    public function __clone()
    {
        foreach ($this->headers as $name => $collection) {
            foreach ($collection as $i => $header) {
                $this->headers[$name][$i] = clone $header;
            }
        }
    }
    public function setMaxLineLength(int $lineLength)
    {
        $this->lineLength = $lineLength;
        foreach ($this->getAll() as $header) {
            $header->setMaxLineLength($lineLength);
        }
    }
    public function getMaxLineLength() : int
    {
        return $this->lineLength;
    }
    /**
     * @param (NamedAddress|Address|string)[] $addresses
     *
     * @return $this
     */
    public function addMailboxListHeader(string $name, array $addresses)
    {
        return $this->add(new \_PhpScopere015d8a3273c\Symfony\Component\Mime\Header\MailboxListHeader($name, \_PhpScopere015d8a3273c\Symfony\Component\Mime\Address::createArray($addresses)));
    }
    /**
     * @param NamedAddress|Address|string $address
     *
     * @return $this
     */
    public function addMailboxHeader(string $name, $address)
    {
        return $this->add(new \_PhpScopere015d8a3273c\Symfony\Component\Mime\Header\MailboxHeader($name, \_PhpScopere015d8a3273c\Symfony\Component\Mime\Address::create($address)));
    }
    /**
     * @param string|array $ids
     *
     * @return $this
     */
    public function addIdHeader(string $name, $ids)
    {
        return $this->add(new \_PhpScopere015d8a3273c\Symfony\Component\Mime\Header\IdentificationHeader($name, $ids));
    }
    /**
     * @param Address|string $path
     *
     * @return $this
     */
    public function addPathHeader(string $name, $path)
    {
        return $this->add(new \_PhpScopere015d8a3273c\Symfony\Component\Mime\Header\PathHeader($name, $path instanceof \_PhpScopere015d8a3273c\Symfony\Component\Mime\Address ? $path : new \_PhpScopere015d8a3273c\Symfony\Component\Mime\Address($path)));
    }
    /**
     * @return $this
     */
    public function addDateHeader(string $name, \DateTimeInterface $dateTime)
    {
        return $this->add(new \_PhpScopere015d8a3273c\Symfony\Component\Mime\Header\DateHeader($name, $dateTime));
    }
    /**
     * @return $this
     */
    public function addTextHeader(string $name, string $value)
    {
        return $this->add(new \_PhpScopere015d8a3273c\Symfony\Component\Mime\Header\UnstructuredHeader($name, $value));
    }
    /**
     * @return $this
     */
    public function addParameterizedHeader(string $name, string $value, array $params = [])
    {
        return $this->add(new \_PhpScopere015d8a3273c\Symfony\Component\Mime\Header\ParameterizedHeader($name, $value, $params));
    }
    public function has(string $name) : bool
    {
        return isset($this->headers[\strtolower($name)]);
    }
    /**
     * @return $this
     */
    public function add(\_PhpScopere015d8a3273c\Symfony\Component\Mime\Header\HeaderInterface $header)
    {
        static $map = ['date' => \_PhpScopere015d8a3273c\Symfony\Component\Mime\Header\DateHeader::class, 'from' => \_PhpScopere015d8a3273c\Symfony\Component\Mime\Header\MailboxListHeader::class, 'sender' => \_PhpScopere015d8a3273c\Symfony\Component\Mime\Header\MailboxHeader::class, 'reply-to' => \_PhpScopere015d8a3273c\Symfony\Component\Mime\Header\MailboxListHeader::class, 'to' => \_PhpScopere015d8a3273c\Symfony\Component\Mime\Header\MailboxListHeader::class, 'cc' => \_PhpScopere015d8a3273c\Symfony\Component\Mime\Header\MailboxListHeader::class, 'bcc' => \_PhpScopere015d8a3273c\Symfony\Component\Mime\Header\MailboxListHeader::class, 'message-id' => \_PhpScopere015d8a3273c\Symfony\Component\Mime\Header\IdentificationHeader::class, 'in-reply-to' => \_PhpScopere015d8a3273c\Symfony\Component\Mime\Header\IdentificationHeader::class, 'references' => \_PhpScopere015d8a3273c\Symfony\Component\Mime\Header\IdentificationHeader::class, 'return-path' => \_PhpScopere015d8a3273c\Symfony\Component\Mime\Header\PathHeader::class];
        $header->setMaxLineLength($this->lineLength);
        $name = \strtolower($header->getName());
        if (isset($map[$name]) && !$header instanceof $map[$name]) {
            throw new \_PhpScopere015d8a3273c\Symfony\Component\Mime\Exception\LogicException(\sprintf('The "%s" header must be an instance of "%s" (got "%s").', $header->getName(), $map[$name], \get_class($header)));
        }
        if (\in_array($name, self::$uniqueHeaders, \true) && isset($this->headers[$name]) && \count($this->headers[$name]) > 0) {
            throw new \_PhpScopere015d8a3273c\Symfony\Component\Mime\Exception\LogicException(\sprintf('Impossible to set header "%s" as it\'s already defined and must be unique.', $header->getName()));
        }
        $this->headers[$name][] = $header;
        return $this;
    }
    public function get(string $name) : ?\_PhpScopere015d8a3273c\Symfony\Component\Mime\Header\HeaderInterface
    {
        $name = \strtolower($name);
        if (!isset($this->headers[$name])) {
            return null;
        }
        $values = \array_values($this->headers[$name]);
        return \array_shift($values);
    }
    public function getAll(string $name = null) : iterable
    {
        if (null === $name) {
            foreach ($this->headers as $name => $collection) {
                foreach ($collection as $header) {
                    (yield $name => $header);
                }
            }
        } elseif (isset($this->headers[\strtolower($name)])) {
            foreach ($this->headers[\strtolower($name)] as $header) {
                (yield $header);
            }
        }
    }
    public function getNames() : array
    {
        return \array_keys($this->headers);
    }
    public function remove(string $name) : void
    {
        unset($this->headers[\strtolower($name)]);
    }
    public static function isUniqueHeader(string $name) : bool
    {
        return \in_array($name, self::$uniqueHeaders, \true);
    }
    public function toString() : string
    {
        $string = '';
        foreach ($this->toArray() as $str) {
            $string .= $str . "\r\n";
        }
        return $string;
    }
    public function toArray() : array
    {
        $arr = [];
        foreach ($this->getAll() as $header) {
            if ('' !== $header->getBodyAsString()) {
                $arr[] = $header->toString();
            }
        }
        return $arr;
    }
    /**
     * @internal
     */
    public function getHeaderBody($name)
    {
        return $this->has($name) ? $this->get($name)->getBody() : null;
    }
    /**
     * @internal
     */
    public function setHeaderBody(string $type, string $name, $body) : void
    {
        if ($this->has($name)) {
            $this->get($name)->setBody($body);
        } else {
            $this->{'add' . $type . 'Header'}($name, $body);
        }
    }
    /**
     * @internal
     */
    public function getHeaderParameter(string $name, string $parameter) : ?string
    {
        if (!$this->has($name)) {
            return null;
        }
        $header = $this->get($name);
        if (!$header instanceof \_PhpScopere015d8a3273c\Symfony\Component\Mime\Header\ParameterizedHeader) {
            throw new \_PhpScopere015d8a3273c\Symfony\Component\Mime\Exception\LogicException(\sprintf('Unable to get parameter "%s" on header "%s" as the header is not of class "%s".', $parameter, $name, \_PhpScopere015d8a3273c\Symfony\Component\Mime\Header\ParameterizedHeader::class));
        }
        return $header->getParameter($parameter);
    }
    /**
     * @internal
     */
    public function setHeaderParameter(string $name, string $parameter, $value) : void
    {
        if (!$this->has($name)) {
            throw new \_PhpScopere015d8a3273c\Symfony\Component\Mime\Exception\LogicException(\sprintf('Unable to set parameter "%s" on header "%s" as the header is not defined.', $parameter, $name));
        }
        $header = $this->get($name);
        if (!$header instanceof \_PhpScopere015d8a3273c\Symfony\Component\Mime\Header\ParameterizedHeader) {
            throw new \_PhpScopere015d8a3273c\Symfony\Component\Mime\Exception\LogicException(\sprintf('Unable to set parameter "%s" on header "%s" as the header is not of class "%s".', $parameter, $name, \_PhpScopere015d8a3273c\Symfony\Component\Mime\Header\ParameterizedHeader::class));
        }
        $header->setParameter($parameter, $value);
    }
}
