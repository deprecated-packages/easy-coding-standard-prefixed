<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf3db63c305b2\Symfony\Component\Mime\Tests;

use _PhpScoperf3db63c305b2\PHPUnit\Framework\TestCase;
use _PhpScoperf3db63c305b2\Symfony\Component\Mime\Address;
use _PhpScoperf3db63c305b2\Symfony\Component\Mime\Email;
use _PhpScoperf3db63c305b2\Symfony\Component\Mime\NamedAddress;
use _PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\DataPart;
use _PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\Multipart\AlternativePart;
use _PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\Multipart\MixedPart;
use _PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\Multipart\RelatedPart;
use _PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\TextPart;
class EmailTest extends \_PhpScoperf3db63c305b2\PHPUnit\Framework\TestCase
{
    public function testSubject()
    {
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->subject('Subject');
        $this->assertEquals('Subject', $e->getSubject());
    }
    public function testDate()
    {
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->date($d = new \DateTimeImmutable());
        $this->assertSame($d, $e->getDate());
    }
    public function testReturnPath()
    {
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->returnPath('fabien@symfony.com');
        $this->assertEquals(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('fabien@symfony.com'), $e->getReturnPath());
    }
    public function testSender()
    {
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->sender('fabien@symfony.com');
        $this->assertEquals(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('fabien@symfony.com'), $e->getSender());
        $e->sender($fabien = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('fabien@symfony.com'));
        $this->assertSame($fabien, $e->getSender());
    }
    public function testFrom()
    {
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $helene = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('helene@symfony.com');
        $thomas = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\NamedAddress('thomas@symfony.com', 'Thomas');
        $caramel = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('caramel@symfony.com');
        $this->assertSame($e, $e->from('fabien@symfony.com', $helene, $thomas));
        $v = $e->getFrom();
        $this->assertCount(3, $v);
        $this->assertEquals(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('fabien@symfony.com'), $v[0]);
        $this->assertSame($helene, $v[1]);
        $this->assertSame($thomas, $v[2]);
        $this->assertSame($e, $e->addFrom('lucas@symfony.com', $caramel));
        $v = $e->getFrom();
        $this->assertCount(5, $v);
        $this->assertEquals(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('fabien@symfony.com'), $v[0]);
        $this->assertSame($helene, $v[1]);
        $this->assertSame($thomas, $v[2]);
        $this->assertEquals(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('lucas@symfony.com'), $v[3]);
        $this->assertSame($caramel, $v[4]);
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->addFrom('lucas@symfony.com', $caramel);
        $this->assertCount(2, $e->getFrom());
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->from('lucas@symfony.com');
        $e->from($caramel);
        $this->assertSame([$caramel], $e->getFrom());
    }
    public function testReplyTo()
    {
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $helene = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('helene@symfony.com');
        $thomas = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\NamedAddress('thomas@symfony.com', 'Thomas');
        $caramel = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('caramel@symfony.com');
        $this->assertSame($e, $e->replyTo('fabien@symfony.com', $helene, $thomas));
        $v = $e->getReplyTo();
        $this->assertCount(3, $v);
        $this->assertEquals(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('fabien@symfony.com'), $v[0]);
        $this->assertSame($helene, $v[1]);
        $this->assertSame($thomas, $v[2]);
        $this->assertSame($e, $e->addReplyTo('lucas@symfony.com', $caramel));
        $v = $e->getReplyTo();
        $this->assertCount(5, $v);
        $this->assertEquals(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('fabien@symfony.com'), $v[0]);
        $this->assertSame($helene, $v[1]);
        $this->assertSame($thomas, $v[2]);
        $this->assertEquals(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('lucas@symfony.com'), $v[3]);
        $this->assertSame($caramel, $v[4]);
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->addReplyTo('lucas@symfony.com', $caramel);
        $this->assertCount(2, $e->getReplyTo());
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->replyTo('lucas@symfony.com');
        $e->replyTo($caramel);
        $this->assertSame([$caramel], $e->getReplyTo());
    }
    public function testTo()
    {
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $helene = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('helene@symfony.com');
        $thomas = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\NamedAddress('thomas@symfony.com', 'Thomas');
        $caramel = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('caramel@symfony.com');
        $this->assertSame($e, $e->to('fabien@symfony.com', $helene, $thomas));
        $v = $e->getTo();
        $this->assertCount(3, $v);
        $this->assertEquals(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('fabien@symfony.com'), $v[0]);
        $this->assertSame($helene, $v[1]);
        $this->assertSame($thomas, $v[2]);
        $this->assertSame($e, $e->addTo('lucas@symfony.com', $caramel));
        $v = $e->getTo();
        $this->assertCount(5, $v);
        $this->assertEquals(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('fabien@symfony.com'), $v[0]);
        $this->assertSame($helene, $v[1]);
        $this->assertSame($thomas, $v[2]);
        $this->assertEquals(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('lucas@symfony.com'), $v[3]);
        $this->assertSame($caramel, $v[4]);
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->addTo('lucas@symfony.com', $caramel);
        $this->assertCount(2, $e->getTo());
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->to('lucas@symfony.com');
        $e->to($caramel);
        $this->assertSame([$caramel], $e->getTo());
    }
    public function testCc()
    {
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $helene = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('helene@symfony.com');
        $thomas = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\NamedAddress('thomas@symfony.com', 'Thomas');
        $caramel = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('caramel@symfony.com');
        $this->assertSame($e, $e->cc('fabien@symfony.com', $helene, $thomas));
        $v = $e->getCc();
        $this->assertCount(3, $v);
        $this->assertEquals(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('fabien@symfony.com'), $v[0]);
        $this->assertSame($helene, $v[1]);
        $this->assertSame($thomas, $v[2]);
        $this->assertSame($e, $e->addCc('lucas@symfony.com', $caramel));
        $v = $e->getCc();
        $this->assertCount(5, $v);
        $this->assertEquals(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('fabien@symfony.com'), $v[0]);
        $this->assertSame($helene, $v[1]);
        $this->assertSame($thomas, $v[2]);
        $this->assertEquals(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('lucas@symfony.com'), $v[3]);
        $this->assertSame($caramel, $v[4]);
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->addCc('lucas@symfony.com', $caramel);
        $this->assertCount(2, $e->getCc());
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->cc('lucas@symfony.com');
        $e->cc($caramel);
        $this->assertSame([$caramel], $e->getCc());
    }
    public function testBcc()
    {
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $helene = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('helene@symfony.com');
        $thomas = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\NamedAddress('thomas@symfony.com', 'Thomas');
        $caramel = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('caramel@symfony.com');
        $this->assertSame($e, $e->bcc('fabien@symfony.com', $helene, $thomas));
        $v = $e->getBcc();
        $this->assertCount(3, $v);
        $this->assertEquals(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('fabien@symfony.com'), $v[0]);
        $this->assertSame($helene, $v[1]);
        $this->assertSame($thomas, $v[2]);
        $this->assertSame($e, $e->addBcc('lucas@symfony.com', $caramel));
        $v = $e->getBcc();
        $this->assertCount(5, $v);
        $this->assertEquals(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('fabien@symfony.com'), $v[0]);
        $this->assertSame($helene, $v[1]);
        $this->assertSame($thomas, $v[2]);
        $this->assertEquals(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Address('lucas@symfony.com'), $v[3]);
        $this->assertSame($caramel, $v[4]);
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->addBcc('lucas@symfony.com', $caramel);
        $this->assertCount(2, $e->getBcc());
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->bcc('lucas@symfony.com');
        $e->bcc($caramel);
        $this->assertSame([$caramel], $e->getBcc());
    }
    public function testPriority()
    {
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $this->assertEquals(3, $e->getPriority());
        $e->priority(1);
        $this->assertEquals(1, $e->getPriority());
        $e->priority(10);
        $this->assertEquals(5, $e->getPriority());
        $e->priority(-10);
        $this->assertEquals(1, $e->getPriority());
    }
    public function testGenerateBodyThrowsWhenEmptyBody()
    {
        $this->expectException(\LogicException::class);
        (new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email())->getBody();
    }
    public function testGetBody()
    {
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->setBody($text = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\TextPart('text content'));
        $this->assertEquals($text, $e->getBody());
    }
    public function testGenerateBody()
    {
        $text = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\TextPart('text content');
        $html = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\TextPart('html content', 'utf-8', 'html');
        $att = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\DataPart($file = \fopen(__DIR__ . '/Fixtures/mimetypes/test', 'r'));
        $img = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\DataPart($image = \fopen(__DIR__ . '/Fixtures/mimetypes/test.gif', 'r'), 'test.gif');
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->text('text content');
        $this->assertEquals($text, $e->getBody());
        $this->assertEquals('text content', $e->getTextBody());
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->html('html content');
        $this->assertEquals($html, $e->getBody());
        $this->assertEquals('html content', $e->getHtmlBody());
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->html('html content');
        $e->text('text content');
        $this->assertEquals(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\Multipart\AlternativePart($text, $html), $e->getBody());
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->html('html content', 'iso-8859-1');
        $e->text('text content', 'iso-8859-1');
        $this->assertEquals('iso-8859-1', $e->getTextCharset());
        $this->assertEquals('iso-8859-1', $e->getHtmlCharset());
        $this->assertEquals(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\Multipart\AlternativePart(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\TextPart('text content', 'iso-8859-1'), new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\TextPart('html content', 'iso-8859-1', 'html')), $e->getBody());
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->attach($file);
        $e->text('text content');
        $this->assertEquals(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\Multipart\MixedPart($text, $att), $e->getBody());
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->attach($file);
        $e->html('html content');
        $this->assertEquals(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\Multipart\MixedPart($html, $att), $e->getBody());
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->html('html content');
        $e->text('text content');
        $e->attach($file);
        $this->assertEquals(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\Multipart\MixedPart(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\Multipart\AlternativePart($text, $html), $att), $e->getBody());
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->html('html content');
        $e->text('text content');
        $e->attach($file);
        $e->attach($image, 'test.gif');
        $this->assertEquals(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\Multipart\MixedPart(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\Multipart\AlternativePart($text, $html), $att, $img), $e->getBody());
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->text('text content');
        $e->attach($file);
        $e->attach($image, 'test.gif');
        $this->assertEquals(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\Multipart\MixedPart($text, $att, $img), $e->getBody());
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->html($content = 'html content <img src="test.gif">');
        $e->text('text content');
        $e->attach($file);
        $e->attach($image, 'test.gif');
        $fullhtml = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\TextPart($content, 'utf-8', 'html');
        $this->assertEquals(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\Multipart\MixedPart(new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\Multipart\AlternativePart($text, $fullhtml), $att, $img), $e->getBody());
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->html($content = 'html content <img src="cid:test.gif">');
        $e->text('text content');
        $e->attach($file);
        $e->attach($image, 'test.gif');
        $fullhtml = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\TextPart($content, 'utf-8', 'html');
        $inlinedimg = (new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\DataPart($image, 'test.gif'))->asInline();
        $body = $e->getBody();
        $this->assertInstanceOf(\_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\Multipart\MixedPart::class, $body);
        $this->assertCount(2, $related = $body->getParts());
        $this->assertInstanceOf(\_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\Multipart\RelatedPart::class, $related[0]);
        $this->assertEquals($att, $related[1]);
        $this->assertCount(2, $parts = $related[0]->getParts());
        $this->assertInstanceOf(\_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\Multipart\AlternativePart::class, $parts[0]);
        $generatedHtml = $parts[0]->getParts()[1];
        $this->assertContains('cid:' . $parts[1]->getContentId(), $generatedHtml->getBody());
        $content = 'html content <img src="cid:test.gif">';
        $r = \fopen('php://memory', 'r+', \false);
        \fwrite($r, $content);
        \rewind($r);
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->html($r);
        // embedding the same image twice results in one image only in the email
        $e->embed($image, 'test.gif');
        $e->embed($image, 'test.gif');
        $body = $e->getBody();
        $this->assertInstanceOf(\_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\Multipart\RelatedPart::class, $body);
        // 2 parts only, not 3 (text + embedded image once)
        $this->assertCount(2, $parts = $body->getParts());
        $this->assertStringMatchesFormat('html content <img src=3D"cid:%s@symfony">', $parts[0]->bodyToString());
    }
    public function testAttachments()
    {
        $contents = \file_get_contents($name = __DIR__ . '/Fixtures/mimetypes/test', 'r');
        $att = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\DataPart($file = \fopen($name, 'r'), 'test');
        $inline = (new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\DataPart($contents, 'test'))->asInline();
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->attach($file, 'test');
        $e->embed($contents, 'test');
        $this->assertEquals([$att, $inline], $e->getAttachments());
        $att = \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\DataPart::fromPath($name, 'test');
        $inline = \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\DataPart::fromPath($name, 'test')->asInline();
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->attachFromPath($name);
        $e->embedFromPath($name);
        $this->assertEquals([$att->bodyToString(), $inline->bodyToString()], \array_map(function (\_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\DataPart $a) {
            return $a->bodyToString();
        }, $e->getAttachments()));
        $this->assertEquals([$att->getPreparedHeaders(), $inline->getPreparedHeaders()], \array_map(function (\_PhpScoperf3db63c305b2\Symfony\Component\Mime\Part\DataPart $a) {
            return $a->getPreparedHeaders();
        }, $e->getAttachments()));
    }
    public function testSerialize()
    {
        $r = \fopen('php://memory', 'r+', \false);
        \fwrite($r, 'Text content');
        \rewind($r);
        $e = new \_PhpScoperf3db63c305b2\Symfony\Component\Mime\Email();
        $e->from('fabien@symfony.com');
        $e->text($r);
        $e->html($r);
        $contents = \file_get_contents($name = __DIR__ . '/Fixtures/mimetypes/test', 'r');
        $file = \fopen($name, 'r');
        $e->attach($file, 'test');
        $expected = clone $e;
        $n = \unserialize(\serialize($e));
        $this->assertEquals($expected->getHeaders(), $n->getHeaders());
        $this->assertEquals($e->getBody(), $n->getBody());
    }
}
