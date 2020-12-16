<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc75fd40d7a6e\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoperc75fd40d7a6e\PHPUnit\Framework\TestCase;
use _PhpScoperc75fd40d7a6e\Symfony\Component\Mime\Message;
use _PhpScoperc75fd40d7a6e\Symfony\Component\Mime\Part\MessagePart;
use _PhpScoperc75fd40d7a6e\Symfony\Component\Mime\Part\Multipart\DigestPart;
class DigestPartTest extends \_PhpScoperc75fd40d7a6e\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScoperc75fd40d7a6e\Symfony\Component\Mime\Part\Multipart\DigestPart($a = new \_PhpScoperc75fd40d7a6e\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperc75fd40d7a6e\Symfony\Component\Mime\Message()), $b = new \_PhpScoperc75fd40d7a6e\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperc75fd40d7a6e\Symfony\Component\Mime\Message()));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('digest', $r->getMediaSubtype());
        $this->assertEquals([$a, $b], $r->getParts());
    }
}
