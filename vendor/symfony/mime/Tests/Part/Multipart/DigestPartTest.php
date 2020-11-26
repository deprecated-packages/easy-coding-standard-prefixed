<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb2e2c0c42e71\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoperb2e2c0c42e71\PHPUnit\Framework\TestCase;
use _PhpScoperb2e2c0c42e71\Symfony\Component\Mime\Message;
use _PhpScoperb2e2c0c42e71\Symfony\Component\Mime\Part\MessagePart;
use _PhpScoperb2e2c0c42e71\Symfony\Component\Mime\Part\Multipart\DigestPart;
class DigestPartTest extends \_PhpScoperb2e2c0c42e71\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScoperb2e2c0c42e71\Symfony\Component\Mime\Part\Multipart\DigestPart($a = new \_PhpScoperb2e2c0c42e71\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperb2e2c0c42e71\Symfony\Component\Mime\Message()), $b = new \_PhpScoperb2e2c0c42e71\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperb2e2c0c42e71\Symfony\Component\Mime\Message()));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('digest', $r->getMediaSubtype());
        $this->assertEquals([$a, $b], $r->getParts());
    }
}
