<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfb2c402b972b\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoperfb2c402b972b\PHPUnit\Framework\TestCase;
use _PhpScoperfb2c402b972b\Symfony\Component\Mime\Message;
use _PhpScoperfb2c402b972b\Symfony\Component\Mime\Part\MessagePart;
use _PhpScoperfb2c402b972b\Symfony\Component\Mime\Part\Multipart\DigestPart;
class DigestPartTest extends \_PhpScoperfb2c402b972b\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScoperfb2c402b972b\Symfony\Component\Mime\Part\Multipart\DigestPart($a = new \_PhpScoperfb2c402b972b\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperfb2c402b972b\Symfony\Component\Mime\Message()), $b = new \_PhpScoperfb2c402b972b\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperfb2c402b972b\Symfony\Component\Mime\Message()));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('digest', $r->getMediaSubtype());
        $this->assertEquals([$a, $b], $r->getParts());
    }
}
