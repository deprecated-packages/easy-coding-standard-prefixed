<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb6a8e65b492c\Symfony\Component\Mime\Header;

use _PhpScoperb6a8e65b492c\Symfony\Component\Mime\Address;
use _PhpScoperb6a8e65b492c\Symfony\Component\Mime\Exception\RfcComplianceException;
/**
 * A Path Header, such a Return-Path (one address).
 *
 * @author Chris Corbyn
 *
 * @experimental in 4.3
 */
final class PathHeader extends \_PhpScoperb6a8e65b492c\Symfony\Component\Mime\Header\AbstractHeader
{
    private $address;
    public function __construct(string $name, \_PhpScoperb6a8e65b492c\Symfony\Component\Mime\Address $address)
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
    public function setAddress(\_PhpScoperb6a8e65b492c\Symfony\Component\Mime\Address $address)
    {
        $this->address = $address;
    }
    public function getAddress() : \_PhpScoperb6a8e65b492c\Symfony\Component\Mime\Address
    {
        return $this->address;
    }
    public function getBodyAsString() : string
    {
        return '<' . $this->address->toString() . '>';
    }
}
