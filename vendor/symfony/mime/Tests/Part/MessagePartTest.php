<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercb576ca159b5\Symfony\Component\Mime\Tests\Part;

use _PhpScopercb576ca159b5\PHPUnit\Framework\TestCase;
use _PhpScopercb576ca159b5\Symfony\Component\Mime\Email;
use _PhpScopercb576ca159b5\Symfony\Component\Mime\Header\Headers;
use _PhpScopercb576ca159b5\Symfony\Component\Mime\Header\ParameterizedHeader;
use _PhpScopercb576ca159b5\Symfony\Component\Mime\Header\UnstructuredHeader;
use _PhpScopercb576ca159b5\Symfony\Component\Mime\Part\MessagePart;
class MessagePartTest extends \_PhpScopercb576ca159b5\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $p = new \_PhpScopercb576ca159b5\Symfony\Component\Mime\Part\MessagePart((new \_PhpScopercb576ca159b5\Symfony\Component\Mime\Email())->from('fabien@symfony.com')->text('content'));
        $this->assertContains('content', $p->getBody());
        $this->assertContains('content', $p->bodyToString());
        $this->assertContains('content', \implode('', \iterator_to_array($p->bodyToIterable())));
        $this->assertEquals('message', $p->getMediaType());
        $this->assertEquals('rfc822', $p->getMediaSubType());
    }
    public function testHeaders()
    {
        $p = new \_PhpScopercb576ca159b5\Symfony\Component\Mime\Part\MessagePart((new \_PhpScopercb576ca159b5\Symfony\Component\Mime\Email())->from('fabien@symfony.com')->text('content')->subject('Subject'));
        $this->assertEquals(new \_PhpScopercb576ca159b5\Symfony\Component\Mime\Header\Headers(new \_PhpScopercb576ca159b5\Symfony\Component\Mime\Header\ParameterizedHeader('Content-Type', 'message/rfc822', ['name' => 'Subject.eml']), new \_PhpScopercb576ca159b5\Symfony\Component\Mime\Header\UnstructuredHeader('Content-Transfer-Encoding', 'base64'), new \_PhpScopercb576ca159b5\Symfony\Component\Mime\Header\ParameterizedHeader('Content-Disposition', 'attachment', ['name' => 'Subject.eml', 'filename' => 'Subject.eml'])), $p->getPreparedHeaders());
    }
}
