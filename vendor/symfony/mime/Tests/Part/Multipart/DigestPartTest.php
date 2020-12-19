<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera6f918786d5c\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScopera6f918786d5c\PHPUnit\Framework\TestCase;
use _PhpScopera6f918786d5c\Symfony\Component\Mime\Message;
use _PhpScopera6f918786d5c\Symfony\Component\Mime\Part\MessagePart;
use _PhpScopera6f918786d5c\Symfony\Component\Mime\Part\Multipart\DigestPart;
class DigestPartTest extends \_PhpScopera6f918786d5c\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScopera6f918786d5c\Symfony\Component\Mime\Part\Multipart\DigestPart($a = new \_PhpScopera6f918786d5c\Symfony\Component\Mime\Part\MessagePart(new \_PhpScopera6f918786d5c\Symfony\Component\Mime\Message()), $b = new \_PhpScopera6f918786d5c\Symfony\Component\Mime\Part\MessagePart(new \_PhpScopera6f918786d5c\Symfony\Component\Mime\Message()));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('digest', $r->getMediaSubtype());
        $this->assertEquals([$a, $b], $r->getParts());
    }
}
