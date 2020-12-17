<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfa7254c25e18\Symfony\Component\Mime\Tests\Header;

use _PhpScoperfa7254c25e18\PHPUnit\Framework\TestCase;
use _PhpScoperfa7254c25e18\Symfony\Component\Mime\Address;
use _PhpScoperfa7254c25e18\Symfony\Component\Mime\Header\MailboxHeader;
use _PhpScoperfa7254c25e18\Symfony\Component\Mime\NamedAddress;
class MailboxHeaderTest extends \_PhpScoperfa7254c25e18\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $header = new \_PhpScoperfa7254c25e18\Symfony\Component\Mime\Header\MailboxHeader('Sender', $address = new \_PhpScoperfa7254c25e18\Symfony\Component\Mime\Address('fabien@symfony.com'));
        $this->assertEquals($address, $header->getAddress());
        $this->assertEquals($address, $header->getBody());
    }
    public function testAddress()
    {
        $header = new \_PhpScoperfa7254c25e18\Symfony\Component\Mime\Header\MailboxHeader('Sender', new \_PhpScoperfa7254c25e18\Symfony\Component\Mime\Address('fabien@symfony.com'));
        $header->setBody($address = new \_PhpScoperfa7254c25e18\Symfony\Component\Mime\Address('helene@symfony.com'));
        $this->assertEquals($address, $header->getAddress());
        $this->assertEquals($address, $header->getBody());
        $header->setAddress($address = new \_PhpScoperfa7254c25e18\Symfony\Component\Mime\Address('thomas@symfony.com'));
        $this->assertEquals($address, $header->getAddress());
        $this->assertEquals($address, $header->getBody());
    }
    public function testgetBodyAsString()
    {
        $header = new \_PhpScoperfa7254c25e18\Symfony\Component\Mime\Header\MailboxHeader('Sender', new \_PhpScoperfa7254c25e18\Symfony\Component\Mime\Address('fabien@symfony.com'));
        $this->assertEquals('fabien@symfony.com', $header->getBodyAsString());
        $header->setAddress(new \_PhpScoperfa7254c25e18\Symfony\Component\Mime\Address('fabien@sïmfony.com'));
        $this->assertEquals('fabien@xn--smfony-iwa.com', $header->getBodyAsString());
        $header = new \_PhpScoperfa7254c25e18\Symfony\Component\Mime\Header\MailboxHeader('Sender', new \_PhpScoperfa7254c25e18\Symfony\Component\Mime\NamedAddress('fabien@symfony.com', 'Fabien Potencier'));
        $this->assertEquals('Fabien Potencier <fabien@symfony.com>', $header->getBodyAsString());
        $header = new \_PhpScoperfa7254c25e18\Symfony\Component\Mime\Header\MailboxHeader('Sender', new \_PhpScoperfa7254c25e18\Symfony\Component\Mime\NamedAddress('fabien@symfony.com', 'Fabien Potencier, "from Symfony"'));
        $this->assertEquals('"Fabien Potencier, \\"from Symfony\\"" <fabien@symfony.com>', $header->getBodyAsString());
        $header = new \_PhpScoperfa7254c25e18\Symfony\Component\Mime\Header\MailboxHeader('From', new \_PhpScoperfa7254c25e18\Symfony\Component\Mime\NamedAddress('fabien@symfony.com', 'Fabien Potencier, \\escaped\\'));
        $this->assertEquals('"Fabien Potencier, \\\\escaped\\\\" <fabien@symfony.com>', $header->getBodyAsString());
        $name = 'P' . \pack('C', 0x8f) . 'tencier';
        $header = new \_PhpScoperfa7254c25e18\Symfony\Component\Mime\Header\MailboxHeader('Sender', new \_PhpScoperfa7254c25e18\Symfony\Component\Mime\NamedAddress('fabien@symfony.com', 'Fabien ' . $name));
        $header->setCharset('iso-8859-1');
        $this->assertEquals('Fabien =?' . $header->getCharset() . '?Q?P=8Ftencier?= <fabien@symfony.com>', $header->getBodyAsString());
    }
    /**
     * @expectedException \Symfony\Component\Mime\Exception\AddressEncoderException
     */
    public function testUtf8CharsInLocalPartThrows()
    {
        $header = new \_PhpScoperfa7254c25e18\Symfony\Component\Mime\Header\MailboxHeader('Sender', new \_PhpScoperfa7254c25e18\Symfony\Component\Mime\Address('fabïen@symfony.com'));
        $header->getBodyAsString();
    }
    public function testToString()
    {
        $header = new \_PhpScoperfa7254c25e18\Symfony\Component\Mime\Header\MailboxHeader('Sender', new \_PhpScoperfa7254c25e18\Symfony\Component\Mime\Address('fabien@symfony.com'));
        $this->assertEquals('Sender: fabien@symfony.com', $header->toString());
        $header = new \_PhpScoperfa7254c25e18\Symfony\Component\Mime\Header\MailboxHeader('Sender', new \_PhpScoperfa7254c25e18\Symfony\Component\Mime\NamedAddress('fabien@symfony.com', 'Fabien Potencier'));
        $this->assertEquals('Sender: Fabien Potencier <fabien@symfony.com>', $header->toString());
    }
}
