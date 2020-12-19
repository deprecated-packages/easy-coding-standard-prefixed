<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd1a5bf00e83e\Symfony\Component\Mime\Tests\Header;

use _PhpScoperd1a5bf00e83e\PHPUnit\Framework\TestCase;
use _PhpScoperd1a5bf00e83e\Symfony\Component\Mime\Address;
use _PhpScoperd1a5bf00e83e\Symfony\Component\Mime\Header\PathHeader;
class PathHeaderTest extends \_PhpScoperd1a5bf00e83e\PHPUnit\Framework\TestCase
{
    public function testSingleAddressCanBeSetAndFetched()
    {
        $header = new \_PhpScoperd1a5bf00e83e\Symfony\Component\Mime\Header\PathHeader('Return-Path', $address = new \_PhpScoperd1a5bf00e83e\Symfony\Component\Mime\Address('chris@swiftmailer.org'));
        $this->assertEquals($address, $header->getAddress());
    }
    /**
     * @expectedException \Exception
     */
    public function testAddressMustComplyWithRfc2822()
    {
        $header = new \_PhpScoperd1a5bf00e83e\Symfony\Component\Mime\Header\PathHeader('Return-Path', new \_PhpScoperd1a5bf00e83e\Symfony\Component\Mime\Address('chr is@swiftmailer.org'));
    }
    public function testValueIsAngleAddrWithValidAddress()
    {
        /* -- RFC 2822, 3.6.7.
        
                    return          =       "Return-Path:" path CRLF
        
                    path            =       ([CFWS] "<" ([CFWS] / addr-spec) ">" [CFWS]) /
                                                                    obs-path
                 */
        $header = new \_PhpScoperd1a5bf00e83e\Symfony\Component\Mime\Header\PathHeader('Return-Path', new \_PhpScoperd1a5bf00e83e\Symfony\Component\Mime\Address('chris@swiftmailer.org'));
        $this->assertEquals('<chris@swiftmailer.org>', $header->getBodyAsString());
    }
    public function testAddressIsIdnEncoded()
    {
        $header = new \_PhpScoperd1a5bf00e83e\Symfony\Component\Mime\Header\PathHeader('Return-Path', new \_PhpScoperd1a5bf00e83e\Symfony\Component\Mime\Address('chris@swïftmailer.org'));
        $this->assertEquals('<chris@xn--swftmailer-78a.org>', $header->getBodyAsString());
    }
    /**
     * @expectedException \Symfony\Component\Mime\Exception\AddressEncoderException
     */
    public function testAddressMustBeEncodable()
    {
        $header = new \_PhpScoperd1a5bf00e83e\Symfony\Component\Mime\Header\PathHeader('Return-Path', new \_PhpScoperd1a5bf00e83e\Symfony\Component\Mime\Address('chrïs@swiftmailer.org'));
        $header->getBodyAsString();
    }
    public function testSetBody()
    {
        $header = new \_PhpScoperd1a5bf00e83e\Symfony\Component\Mime\Header\PathHeader('Return-Path', new \_PhpScoperd1a5bf00e83e\Symfony\Component\Mime\Address('foo@example.com'));
        $header->setBody($address = new \_PhpScoperd1a5bf00e83e\Symfony\Component\Mime\Address('foo@bar.tld'));
        $this->assertEquals($address, $header->getAddress());
    }
    public function testGetBody()
    {
        $header = new \_PhpScoperd1a5bf00e83e\Symfony\Component\Mime\Header\PathHeader('Return-Path', $address = new \_PhpScoperd1a5bf00e83e\Symfony\Component\Mime\Address('foo@bar.tld'));
        $this->assertEquals($address, $header->getBody());
    }
    public function testToString()
    {
        $header = new \_PhpScoperd1a5bf00e83e\Symfony\Component\Mime\Header\PathHeader('Return-Path', new \_PhpScoperd1a5bf00e83e\Symfony\Component\Mime\Address('chris@swiftmailer.org'));
        $this->assertEquals('Return-Path: <chris@swiftmailer.org>', $header->toString());
    }
}
