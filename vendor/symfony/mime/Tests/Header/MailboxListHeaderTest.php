<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper16399a42e87c\Symfony\Component\Mime\Tests\Header;

use _PhpScoper16399a42e87c\PHPUnit\Framework\TestCase;
use _PhpScoper16399a42e87c\Symfony\Component\Mime\Address;
use _PhpScoper16399a42e87c\Symfony\Component\Mime\Header\MailboxListHeader;
use _PhpScoper16399a42e87c\Symfony\Component\Mime\NamedAddress;
class MailboxListHeaderTest extends \_PhpScoper16399a42e87c\PHPUnit\Framework\TestCase
{
    // RFC 2822, 3.6.2 for all tests
    public function testMailboxIsSetForAddress()
    {
        $header = new \_PhpScoper16399a42e87c\Symfony\Component\Mime\Header\MailboxListHeader('From', [new \_PhpScoper16399a42e87c\Symfony\Component\Mime\Address('chris@swiftmailer.org')]);
        $this->assertEquals(['chris@swiftmailer.org'], $header->getAddressStrings());
    }
    public function testMailboxIsRenderedForNameAddress()
    {
        $header = new \_PhpScoper16399a42e87c\Symfony\Component\Mime\Header\MailboxListHeader('From', [new \_PhpScoper16399a42e87c\Symfony\Component\Mime\NamedAddress('chris@swiftmailer.org', 'Chris Corbyn')]);
        $this->assertEquals(['Chris Corbyn <chris@swiftmailer.org>'], $header->getAddressStrings());
    }
    public function testAddressCanBeReturnedForAddress()
    {
        $header = new \_PhpScoper16399a42e87c\Symfony\Component\Mime\Header\MailboxListHeader('From', $addresses = [new \_PhpScoper16399a42e87c\Symfony\Component\Mime\Address('chris@swiftmailer.org')]);
        $this->assertEquals($addresses, $header->getAddresses());
    }
    public function testQuotesInNameAreQuoted()
    {
        $header = new \_PhpScoper16399a42e87c\Symfony\Component\Mime\Header\MailboxListHeader('From', [new \_PhpScoper16399a42e87c\Symfony\Component\Mime\NamedAddress('chris@swiftmailer.org', 'Chris Corbyn, "DHE"')]);
        $this->assertEquals(['"Chris Corbyn, \\"DHE\\"" <chris@swiftmailer.org>'], $header->getAddressStrings());
    }
    public function testEscapeCharsInNameAreQuoted()
    {
        $header = new \_PhpScoper16399a42e87c\Symfony\Component\Mime\Header\MailboxListHeader('From', [new \_PhpScoper16399a42e87c\Symfony\Component\Mime\NamedAddress('chris@swiftmailer.org', 'Chris Corbyn, \\escaped\\')]);
        $this->assertEquals(['"Chris Corbyn, \\\\escaped\\\\" <chris@swiftmailer.org>'], $header->getAddressStrings());
    }
    public function testUtf8CharsInDomainAreIdnEncoded()
    {
        $header = new \_PhpScoper16399a42e87c\Symfony\Component\Mime\Header\MailboxListHeader('From', [new \_PhpScoper16399a42e87c\Symfony\Component\Mime\NamedAddress('chris@swïftmailer.org', 'Chris Corbyn')]);
        $this->assertEquals(['Chris Corbyn <chris@xn--swftmailer-78a.org>'], $header->getAddressStrings());
    }
    /**
     * @expectedException \Symfony\Component\Mime\Exception\AddressEncoderException
     */
    public function testUtf8CharsInLocalPartThrows()
    {
        $header = new \_PhpScoper16399a42e87c\Symfony\Component\Mime\Header\MailboxListHeader('From', [new \_PhpScoper16399a42e87c\Symfony\Component\Mime\NamedAddress('chrïs@swiftmailer.org', 'Chris Corbyn')]);
        $header->getAddressStrings();
    }
    public function testGetMailboxesReturnsNameValuePairs()
    {
        $header = new \_PhpScoper16399a42e87c\Symfony\Component\Mime\Header\MailboxListHeader('From', $addresses = [new \_PhpScoper16399a42e87c\Symfony\Component\Mime\NamedAddress('chris@swiftmailer.org', 'Chris Corbyn, DHE')]);
        $this->assertEquals($addresses, $header->getAddresses());
    }
    public function testMultipleAddressesAsMailboxStrings()
    {
        $header = new \_PhpScoper16399a42e87c\Symfony\Component\Mime\Header\MailboxListHeader('From', [new \_PhpScoper16399a42e87c\Symfony\Component\Mime\Address('chris@swiftmailer.org'), new \_PhpScoper16399a42e87c\Symfony\Component\Mime\Address('mark@swiftmailer.org')]);
        $this->assertEquals(['chris@swiftmailer.org', 'mark@swiftmailer.org'], $header->getAddressStrings());
    }
    public function testNameIsEncodedIfNonAscii()
    {
        $name = 'C' . \pack('C', 0x8f) . 'rbyn';
        $header = new \_PhpScoper16399a42e87c\Symfony\Component\Mime\Header\MailboxListHeader('From', [new \_PhpScoper16399a42e87c\Symfony\Component\Mime\NamedAddress('chris@swiftmailer.org', 'Chris ' . $name)]);
        $header->setCharset('iso-8859-1');
        $addresses = $header->getAddressStrings();
        $this->assertEquals('Chris =?' . $header->getCharset() . '?Q?C=8Frbyn?= <chris@swiftmailer.org>', \array_shift($addresses));
    }
    public function testEncodingLineLengthCalculations()
    {
        /* -- RFC 2047, 2.
           An 'encoded-word' may not be more than 75 characters long, including
           'charset', 'encoding', 'encoded-text', and delimiters.
           */
        $name = 'C' . \pack('C', 0x8f) . 'rbyn';
        $header = new \_PhpScoper16399a42e87c\Symfony\Component\Mime\Header\MailboxListHeader('From', [new \_PhpScoper16399a42e87c\Symfony\Component\Mime\NamedAddress('chris@swiftmailer.org', 'Chris ' . $name)]);
        $header->setCharset('iso-8859-1');
        $addresses = $header->getAddressStrings();
        $this->assertEquals('Chris =?' . $header->getCharset() . '?Q?C=8Frbyn?= <chris@swiftmailer.org>', \array_shift($addresses));
    }
    public function testGetValueReturnsMailboxStringValue()
    {
        $header = new \_PhpScoper16399a42e87c\Symfony\Component\Mime\Header\MailboxListHeader('From', [new \_PhpScoper16399a42e87c\Symfony\Component\Mime\NamedAddress('chris@swiftmailer.org', 'Chris Corbyn')]);
        $this->assertEquals('Chris Corbyn <chris@swiftmailer.org>', $header->getBodyAsString());
    }
    public function testGetValueReturnsMailboxStringValueForMultipleMailboxes()
    {
        $header = new \_PhpScoper16399a42e87c\Symfony\Component\Mime\Header\MailboxListHeader('From', [new \_PhpScoper16399a42e87c\Symfony\Component\Mime\NamedAddress('chris@swiftmailer.org', 'Chris Corbyn'), new \_PhpScoper16399a42e87c\Symfony\Component\Mime\NamedAddress('mark@swiftmailer.org', 'Mark Corbyn')]);
        $this->assertEquals('Chris Corbyn <chris@swiftmailer.org>, Mark Corbyn <mark@swiftmailer.org>', $header->getBodyAsString());
    }
    public function testSetBody()
    {
        $header = new \_PhpScoper16399a42e87c\Symfony\Component\Mime\Header\MailboxListHeader('From', []);
        $header->setBody($addresses = [new \_PhpScoper16399a42e87c\Symfony\Component\Mime\Address('chris@swiftmailer.org')]);
        $this->assertEquals($addresses, $header->getAddresses());
    }
    public function testGetBody()
    {
        $header = new \_PhpScoper16399a42e87c\Symfony\Component\Mime\Header\MailboxListHeader('From', $addresses = [new \_PhpScoper16399a42e87c\Symfony\Component\Mime\Address('chris@swiftmailer.org')]);
        $this->assertEquals($addresses, $header->getBody());
    }
    public function testToString()
    {
        $header = new \_PhpScoper16399a42e87c\Symfony\Component\Mime\Header\MailboxListHeader('From', [new \_PhpScoper16399a42e87c\Symfony\Component\Mime\NamedAddress('chris@example.org', 'Chris Corbyn'), new \_PhpScoper16399a42e87c\Symfony\Component\Mime\NamedAddress('mark@example.org', 'Mark Corbyn')]);
        $this->assertEquals('From: Chris Corbyn <chris@example.org>, Mark Corbyn <mark@example.org>', $header->toString());
    }
}
