<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper5a9febfbbe05\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoper5a9febfbbe05\PHPUnit\Framework\TestCase;
use _PhpScoper5a9febfbbe05\Symfony\Component\Mime\Part\DataPart;
use _PhpScoper5a9febfbbe05\Symfony\Component\Mime\Part\Multipart\FormDataPart;
use _PhpScoper5a9febfbbe05\Symfony\Component\Mime\Part\TextPart;
class FormDataPartTest extends \_PhpScoper5a9febfbbe05\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \ReflectionProperty(\_PhpScoper5a9febfbbe05\Symfony\Component\Mime\Part\TextPart::class, 'encoding');
        $r->setAccessible(\true);
        $b = new \_PhpScoper5a9febfbbe05\Symfony\Component\Mime\Part\TextPart('content');
        $c = \_PhpScoper5a9febfbbe05\Symfony\Component\Mime\Part\DataPart::fromPath($file = __DIR__ . '/../../Fixtures/mimetypes/test.gif');
        $f = new \_PhpScoper5a9febfbbe05\Symfony\Component\Mime\Part\Multipart\FormDataPart(['foo' => $content = 'very very long content that will not be cut even if the length i way more than 76 characters, ok?', 'bar' => clone $b, 'baz' => clone $c]);
        $this->assertEquals('multipart', $f->getMediaType());
        $this->assertEquals('form-data', $f->getMediaSubtype());
        $t = new \_PhpScoper5a9febfbbe05\Symfony\Component\Mime\Part\TextPart($content, 'utf-8', 'plain', '8bit');
        $t->setDisposition('form-data');
        $t->setName('foo');
        $t->getHeaders()->setMaxLineLength(\PHP_INT_MAX);
        $b->setDisposition('form-data');
        $b->setName('bar');
        $b->getHeaders()->setMaxLineLength(\PHP_INT_MAX);
        $r->setValue($b, '8bit');
        $c->setDisposition('form-data');
        $c->setName('baz');
        $c->getHeaders()->setMaxLineLength(\PHP_INT_MAX);
        $r->setValue($c, '8bit');
        $this->assertEquals([$t, $b, $c], $f->getParts());
    }
    public function testToString()
    {
        $p = \_PhpScoper5a9febfbbe05\Symfony\Component\Mime\Part\DataPart::fromPath($file = __DIR__ . '/../../Fixtures/mimetypes/test.gif');
        $this->assertEquals(\base64_encode(\file_get_contents($file)), $p->bodyToString());
    }
    public function testContentLineLength()
    {
        $f = new \_PhpScoper5a9febfbbe05\Symfony\Component\Mime\Part\Multipart\FormDataPart(['foo' => new \_PhpScoper5a9febfbbe05\Symfony\Component\Mime\Part\DataPart($foo = \str_repeat('foo', 1000), 'foo.txt', 'text/plain'), 'bar' => $bar = \str_repeat('bar', 1000)]);
        $parts = $f->getParts();
        $this->assertEquals($foo, $parts[0]->bodyToString());
        $this->assertEquals($bar, $parts[1]->bodyToString());
    }
}
