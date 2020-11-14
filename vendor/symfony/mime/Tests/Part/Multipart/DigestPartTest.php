<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb09c3ec8e01a\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoperb09c3ec8e01a\PHPUnit\Framework\TestCase;
use _PhpScoperb09c3ec8e01a\Symfony\Component\Mime\Message;
use _PhpScoperb09c3ec8e01a\Symfony\Component\Mime\Part\MessagePart;
use _PhpScoperb09c3ec8e01a\Symfony\Component\Mime\Part\Multipart\DigestPart;
class DigestPartTest extends \_PhpScoperb09c3ec8e01a\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScoperb09c3ec8e01a\Symfony\Component\Mime\Part\Multipart\DigestPart($a = new \_PhpScoperb09c3ec8e01a\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperb09c3ec8e01a\Symfony\Component\Mime\Message()), $b = new \_PhpScoperb09c3ec8e01a\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperb09c3ec8e01a\Symfony\Component\Mime\Message()));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('digest', $r->getMediaSubtype());
        $this->assertEquals([$a, $b], $r->getParts());
    }
}
