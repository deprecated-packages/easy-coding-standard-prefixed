<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper8acb416c2f5a\Symfony\Component\Mime;

use _PhpScoper8acb416c2f5a\Egulias\EmailValidator\EmailValidator;
use _PhpScoper8acb416c2f5a\Egulias\EmailValidator\Validation\RFCValidation;
use _PhpScoper8acb416c2f5a\Symfony\Component\Mime\Encoder\IdnAddressEncoder;
use _PhpScoper8acb416c2f5a\Symfony\Component\Mime\Exception\InvalidArgumentException;
use _PhpScoper8acb416c2f5a\Symfony\Component\Mime\Exception\LogicException;
use _PhpScoper8acb416c2f5a\Symfony\Component\Mime\Exception\RfcComplianceException;
/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
class Address
{
    private static $validator;
    private static $encoder;
    private $address;
    public function __construct(string $address)
    {
        if (!\class_exists(\_PhpScoper8acb416c2f5a\Egulias\EmailValidator\EmailValidator::class)) {
            throw new \_PhpScoper8acb416c2f5a\Symfony\Component\Mime\Exception\LogicException(\sprintf('The "%s" class cannot be used as it needs "%s"; try running "composer require egulias/email-validator".', __CLASS__, \_PhpScoper8acb416c2f5a\Egulias\EmailValidator\EmailValidator::class));
        }
        if (null === self::$validator) {
            self::$validator = new \_PhpScoper8acb416c2f5a\Egulias\EmailValidator\EmailValidator();
        }
        if (!self::$validator->isValid($address, new \_PhpScoper8acb416c2f5a\Egulias\EmailValidator\Validation\RFCValidation())) {
            throw new \_PhpScoper8acb416c2f5a\Symfony\Component\Mime\Exception\RfcComplianceException(\sprintf('Email "%s" does not comply with addr-spec of RFC 2822.', $address));
        }
        $this->address = $address;
    }
    public function getAddress() : string
    {
        return $this->address;
    }
    public function getEncodedAddress() : string
    {
        if (null === self::$encoder) {
            self::$encoder = new \_PhpScoper8acb416c2f5a\Symfony\Component\Mime\Encoder\IdnAddressEncoder();
        }
        return self::$encoder->encodeString($this->address);
    }
    public function toString() : string
    {
        return $this->getEncodedAddress();
    }
    /**
     * @param Address|string $address
     */
    public static function create($address) : self
    {
        if ($address instanceof self) {
            return $address;
        }
        if (\is_string($address)) {
            return new self($address);
        }
        throw new \_PhpScoper8acb416c2f5a\Symfony\Component\Mime\Exception\InvalidArgumentException(\sprintf('An address can be an instance of Address or a string ("%s") given).', \is_object($address) ? \get_class($address) : \gettype($address)));
    }
    /**
     * @param (Address|string)[] $addresses
     *
     * @return Address[]
     */
    public static function createArray(array $addresses) : array
    {
        $addrs = [];
        foreach ($addresses as $address) {
            $addrs[] = self::create($address);
        }
        return $addrs;
    }
}
