<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper880bfa4d8b51\Symfony\Component\Mime\Tests\Header;

use _PhpScoper880bfa4d8b51\PHPUnit\Framework\TestCase;
use _PhpScoper880bfa4d8b51\Symfony\Component\Mime\Address;
use _PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers;
use _PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\IdentificationHeader;
use _PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\MailboxListHeader;
use _PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\UnstructuredHeader;
class HeadersTest extends \_PhpScoper880bfa4d8b51\PHPUnit\Framework\TestCase
{
    public function testAddMailboxListHeaderDelegatesToFactory()
    {
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $headers->addMailboxListHeader('From', ['person@domain']);
        $this->assertNotNull($headers->get('From'));
    }
    public function testAddDateHeaderDelegatesToFactory()
    {
        $dateTime = new \DateTimeImmutable();
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $headers->addDateHeader('Date', $dateTime);
        $this->assertNotNull($headers->get('Date'));
    }
    public function testAddTextHeaderDelegatesToFactory()
    {
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $headers->addTextHeader('Subject', 'some text');
        $this->assertNotNull($headers->get('Subject'));
    }
    public function testAddParameterizedHeaderDelegatesToFactory()
    {
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $headers->addParameterizedHeader('Content-Type', 'text/plain', ['charset' => 'utf-8']);
        $this->assertNotNull($headers->get('Content-Type'));
    }
    public function testAddIdHeaderDelegatesToFactory()
    {
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $headers->addIdHeader('Message-ID', 'some@id');
        $this->assertNotNull($headers->get('Message-ID'));
    }
    public function testAddPathHeaderDelegatesToFactory()
    {
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $headers->addPathHeader('Return-Path', 'some@path');
        $this->assertNotNull($headers->get('Return-Path'));
    }
    public function testHasReturnsFalseWhenNoHeaders()
    {
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $this->assertFalse($headers->has('Some-Header'));
    }
    public function testAddedMailboxListHeaderIsSeenByHas()
    {
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $headers->addMailboxListHeader('From', ['person@domain']);
        $this->assertTrue($headers->has('From'));
    }
    public function testAddedDateHeaderIsSeenByHas()
    {
        $dateTime = new \DateTimeImmutable();
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $headers->addDateHeader('Date', $dateTime);
        $this->assertTrue($headers->has('Date'));
    }
    public function testAddedTextHeaderIsSeenByHas()
    {
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $headers->addTextHeader('Subject', 'some text');
        $this->assertTrue($headers->has('Subject'));
    }
    public function testAddedParameterizedHeaderIsSeenByHas()
    {
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $headers->addParameterizedHeader('Content-Type', 'text/plain', ['charset' => 'utf-8']);
        $this->assertTrue($headers->has('Content-Type'));
    }
    public function testAddedIdHeaderIsSeenByHas()
    {
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $headers->addIdHeader('Message-ID', 'some@id');
        $this->assertTrue($headers->has('Message-ID'));
    }
    public function testAddedPathHeaderIsSeenByHas()
    {
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $headers->addPathHeader('Return-Path', 'some@path');
        $this->assertTrue($headers->has('Return-Path'));
    }
    public function testNewlySetHeaderIsSeenByHas()
    {
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $headers->add(new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\UnstructuredHeader('X-Foo', 'bar'));
        $this->assertTrue($headers->has('X-Foo'));
    }
    public function testHasCanDistinguishMultipleHeaders()
    {
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $headers->addTextHeader('X-Test', 'some@id');
        $headers->addTextHeader('X-Test', 'other@id');
        $this->assertTrue($headers->has('X-Test'));
    }
    public function testGet()
    {
        $header = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\IdentificationHeader('Message-ID', 'some@id');
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $headers->addIdHeader('Message-ID', 'some@id');
        $this->assertEquals($header->toString(), $headers->get('Message-ID')->toString());
    }
    public function testGetReturnsNullIfHeaderNotSet()
    {
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $this->assertNull($headers->get('Message-ID'));
    }
    public function testGetAllReturnsAllHeadersMatchingName()
    {
        $header0 = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\UnstructuredHeader('X-Test', 'some@id');
        $header1 = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\UnstructuredHeader('X-Test', 'other@id');
        $header2 = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\UnstructuredHeader('X-Test', 'more@id');
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $headers->addTextHeader('X-Test', 'some@id');
        $headers->addTextHeader('X-Test', 'other@id');
        $headers->addTextHeader('X-Test', 'more@id');
        $this->assertEquals([$header0, $header1, $header2], \iterator_to_array($headers->getAll('X-Test')));
    }
    public function testGetAllReturnsAllHeadersIfNoArguments()
    {
        $header0 = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\IdentificationHeader('Message-ID', 'some@id');
        $header1 = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\UnstructuredHeader('Subject', 'thing');
        $header2 = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\MailboxListHeader('To', [new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Address('person@example.org')]);
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $headers->addIdHeader('Message-ID', 'some@id');
        $headers->addTextHeader('Subject', 'thing');
        $headers->addMailboxListHeader('To', [new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Address('person@example.org')]);
        $this->assertEquals(['message-id' => $header0, 'subject' => $header1, 'to' => $header2], \iterator_to_array($headers->getAll()));
    }
    public function testGetAllReturnsEmptyArrayIfNoneSet()
    {
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $this->assertEquals([], \iterator_to_array($headers->getAll('Received')));
    }
    public function testRemoveRemovesAllHeadersWithName()
    {
        $header0 = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\UnstructuredHeader('X-Test', 'some@id');
        $header1 = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\UnstructuredHeader('X-Test', 'other@id');
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $headers->addIdHeader('X-Test', 'some@id');
        $headers->addIdHeader('X-Test', 'other@id');
        $headers->remove('X-Test');
        $this->assertFalse($headers->has('X-Test'));
        $this->assertFalse($headers->has('X-Test'));
    }
    public function testHasIsNotCaseSensitive()
    {
        $header = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\IdentificationHeader('Message-ID', 'some@id');
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $headers->addIdHeader('Message-ID', 'some@id');
        $this->assertTrue($headers->has('message-id'));
    }
    public function testGetIsNotCaseSensitive()
    {
        $header = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\IdentificationHeader('Message-ID', 'some@id');
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $headers->addIdHeader('Message-ID', 'some@id');
        $this->assertEquals($header, $headers->get('message-id'));
    }
    public function testGetAllIsNotCaseSensitive()
    {
        $header = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\IdentificationHeader('Message-ID', 'some@id');
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $headers->addIdHeader('Message-ID', 'some@id');
        $this->assertEquals([$header], \iterator_to_array($headers->getAll('message-id')));
    }
    public function testRemoveIsNotCaseSensitive()
    {
        $header = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\IdentificationHeader('Message-ID', 'some@id');
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $headers->addIdHeader('Message-ID', 'some@id');
        $headers->remove('message-id');
        $this->assertFalse($headers->has('Message-ID'));
    }
    public function testToStringJoinsHeadersTogether()
    {
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $headers->addTextHeader('Foo', 'bar');
        $headers->addTextHeader('Zip', 'buttons');
        $this->assertEquals("Foo: bar\r\nZip: buttons\r\n", $headers->toString());
    }
    public function testHeadersWithoutBodiesAreNotDisplayed()
    {
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $headers->addTextHeader('Foo', 'bar');
        $headers->addTextHeader('Zip', '');
        $this->assertEquals("Foo: bar\r\n", $headers->toString());
    }
    public function testToArray()
    {
        $headers = new \_PhpScoper880bfa4d8b51\Symfony\Component\Mime\Header\Headers();
        $headers->addIdHeader('Message-ID', 'some@id');
        $headers->addTextHeader('Foo', \str_repeat('a', 60) . \pack('C', 0x8f));
        $this->assertEquals(['Message-ID: <some@id>', "Foo: =?utf-8?Q?aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa?=\r\n =?utf-8?Q?aaaa?="], $headers->toArray());
    }
}
