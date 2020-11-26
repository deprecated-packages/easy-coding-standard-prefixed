<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercb217fd4e736\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScopercb217fd4e736\PHPUnit\Framework\TestCase;
use _PhpScopercb217fd4e736\Symfony\Component\Mime\Part\Multipart\RelatedPart;
use _PhpScopercb217fd4e736\Symfony\Component\Mime\Part\TextPart;
class RelatedPartTest extends \_PhpScopercb217fd4e736\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScopercb217fd4e736\Symfony\Component\Mime\Part\Multipart\RelatedPart($a = new \_PhpScopercb217fd4e736\Symfony\Component\Mime\Part\TextPart('content'), $b = new \_PhpScopercb217fd4e736\Symfony\Component\Mime\Part\TextPart('HTML content', 'utf-8', 'html'), $c = new \_PhpScopercb217fd4e736\Symfony\Component\Mime\Part\TextPart('HTML content again', 'utf-8', 'html'));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('related', $r->getMediaSubtype());
        $this->assertEquals([$a, $b, $c], $r->getParts());
        $this->assertFalse($a->getHeaders()->has('Content-ID'));
        $this->assertTrue($b->getHeaders()->has('Content-ID'));
        $this->assertTrue($c->getHeaders()->has('Content-ID'));
    }
}
