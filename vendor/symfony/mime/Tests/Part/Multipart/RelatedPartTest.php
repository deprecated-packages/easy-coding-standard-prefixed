<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd9fcac9e904f\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoperd9fcac9e904f\PHPUnit\Framework\TestCase;
use _PhpScoperd9fcac9e904f\Symfony\Component\Mime\Part\Multipart\RelatedPart;
use _PhpScoperd9fcac9e904f\Symfony\Component\Mime\Part\TextPart;
class RelatedPartTest extends \_PhpScoperd9fcac9e904f\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScoperd9fcac9e904f\Symfony\Component\Mime\Part\Multipart\RelatedPart($a = new \_PhpScoperd9fcac9e904f\Symfony\Component\Mime\Part\TextPart('content'), $b = new \_PhpScoperd9fcac9e904f\Symfony\Component\Mime\Part\TextPart('HTML content', 'utf-8', 'html'), $c = new \_PhpScoperd9fcac9e904f\Symfony\Component\Mime\Part\TextPart('HTML content again', 'utf-8', 'html'));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('related', $r->getMediaSubtype());
        $this->assertEquals([$a, $b, $c], $r->getParts());
        $this->assertFalse($a->getHeaders()->has('Content-ID'));
        $this->assertTrue($b->getHeaders()->has('Content-ID'));
        $this->assertTrue($c->getHeaders()->has('Content-ID'));
    }
}
