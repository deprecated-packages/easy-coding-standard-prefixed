<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper28ab463fc3ba\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoper28ab463fc3ba\PHPUnit\Framework\TestCase;
use _PhpScoper28ab463fc3ba\Symfony\Component\Mime\Message;
use _PhpScoper28ab463fc3ba\Symfony\Component\Mime\Part\MessagePart;
use _PhpScoper28ab463fc3ba\Symfony\Component\Mime\Part\Multipart\DigestPart;
class DigestPartTest extends \_PhpScoper28ab463fc3ba\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScoper28ab463fc3ba\Symfony\Component\Mime\Part\Multipart\DigestPart($a = new \_PhpScoper28ab463fc3ba\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoper28ab463fc3ba\Symfony\Component\Mime\Message()), $b = new \_PhpScoper28ab463fc3ba\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoper28ab463fc3ba\Symfony\Component\Mime\Message()));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('digest', $r->getMediaSubtype());
        $this->assertEquals([$a, $b], $r->getParts());
    }
}
