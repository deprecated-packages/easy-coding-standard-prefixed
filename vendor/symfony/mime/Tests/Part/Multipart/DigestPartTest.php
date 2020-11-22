<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbc5235eb86f3\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoperbc5235eb86f3\PHPUnit\Framework\TestCase;
use _PhpScoperbc5235eb86f3\Symfony\Component\Mime\Message;
use _PhpScoperbc5235eb86f3\Symfony\Component\Mime\Part\MessagePart;
use _PhpScoperbc5235eb86f3\Symfony\Component\Mime\Part\Multipart\DigestPart;
class DigestPartTest extends \_PhpScoperbc5235eb86f3\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScoperbc5235eb86f3\Symfony\Component\Mime\Part\Multipart\DigestPart($a = new \_PhpScoperbc5235eb86f3\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperbc5235eb86f3\Symfony\Component\Mime\Message()), $b = new \_PhpScoperbc5235eb86f3\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperbc5235eb86f3\Symfony\Component\Mime\Message()));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('digest', $r->getMediaSubtype());
        $this->assertEquals([$a, $b], $r->getParts());
    }
}
