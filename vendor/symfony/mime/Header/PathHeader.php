<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperddde3ba4aebc\Symfony\Component\Mime\Header;

use _PhpScoperddde3ba4aebc\Symfony\Component\Mime\Address;
use _PhpScoperddde3ba4aebc\Symfony\Component\Mime\Exception\RfcComplianceException;
/**
 * A Path Header, such a Return-Path (one address).
 *
 * @author Chris Corbyn
 *
 * @experimental in 4.3
 */
final class PathHeader extends \_PhpScoperddde3ba4aebc\Symfony\Component\Mime\Header\AbstractHeader
{
    private $address;
    public function __construct(string $name, \_PhpScoperddde3ba4aebc\Symfony\Component\Mime\Address $address)
    {
        parent::__construct($name);
        $this->setAddress($address);
    }
    /**
     * @param Address $body
     *
     * @throws RfcComplianceException
     */
    public function setBody($body)
    {
        $this->setAddress($body);
    }
    /**
     * @return Address
     */
    public function getBody()
    {
        return $this->getAddress();
    }
    public function setAddress(\_PhpScoperddde3ba4aebc\Symfony\Component\Mime\Address $address)
    {
        $this->address = $address;
    }
    public function getAddress() : \_PhpScoperddde3ba4aebc\Symfony\Component\Mime\Address
    {
        return $this->address;
    }
    public function getBodyAsString() : string
    {
        return '<' . $this->address->toString() . '>';
    }
}
