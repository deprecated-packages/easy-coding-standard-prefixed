<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperddde3ba4aebc\Symfony\Component\Mime\Tests;

use _PhpScoperddde3ba4aebc\PHPUnit\Framework\TestCase;
use _PhpScoperddde3ba4aebc\Symfony\Component\Mime\CharacterStream;
class CharacterStreamTest extends \_PhpScoperddde3ba4aebc\PHPUnit\Framework\TestCase
{
    public function testReadCharactersAreInTact()
    {
        $stream = new \_PhpScoperddde3ba4aebc\Symfony\Component\Mime\CharacterStream(\pack('C*', 0xd0, 0x94, 0xd0, 0xb6, 0xd0, 0xbe));
        $stream->write(\pack('C*', 0xd0, 0xbb, 0xd1, 0x8e, 0xd0, 0xb1, 0xd1, 0x8b, 0xd1, 0x85));
        $this->assertSame(\pack('C*', 0xd0, 0x94), $stream->read(1));
        $this->assertSame(\pack('C*', 0xd0, 0xb6, 0xd0, 0xbe), $stream->read(2));
        $this->assertSame(\pack('C*', 0xd0, 0xbb), $stream->read(1));
        $this->assertSame(\pack('C*', 0xd1, 0x8e, 0xd0, 0xb1, 0xd1, 0x8b), $stream->read(3));
        $this->assertSame(\pack('C*', 0xd1, 0x85), $stream->read(1));
        $this->assertNull($stream->read(1));
    }
    public function testCharactersCanBeReadAsByteArrays()
    {
        $stream = new \_PhpScoperddde3ba4aebc\Symfony\Component\Mime\CharacterStream(\pack('C*', 0xd0, 0x94, 0xd0, 0xb6, 0xd0, 0xbe));
        $stream->write(\pack('C*', 0xd0, 0xbb, 0xd1, 0x8e, 0xd0, 0xb1, 0xd1, 0x8b, 0xd1, 0x85));
        $this->assertEquals([0xd0, 0x94], $stream->readBytes(1));
        $this->assertEquals([0xd0, 0xb6, 0xd0, 0xbe], $stream->readBytes(2));
        $this->assertEquals([0xd0, 0xbb], $stream->readBytes(1));
        $this->assertEquals([0xd1, 0x8e, 0xd0, 0xb1, 0xd1, 0x8b], $stream->readBytes(3));
        $this->assertEquals([0xd1, 0x85], $stream->readBytes(1));
        $this->assertNull($stream->readBytes(1));
    }
    public function testRequestingLargeCharCountPastEndOfStream()
    {
        $stream = new \_PhpScoperddde3ba4aebc\Symfony\Component\Mime\CharacterStream(\pack('C*', 0xd0, 0x94, 0xd0, 0xb6, 0xd0, 0xbe));
        $this->assertSame(\pack('C*', 0xd0, 0x94, 0xd0, 0xb6, 0xd0, 0xbe), $stream->read(100));
        $this->assertNull($stream->read(1));
    }
    public function testRequestingByteArrayCountPastEndOfStream()
    {
        $stream = new \_PhpScoperddde3ba4aebc\Symfony\Component\Mime\CharacterStream(\pack('C*', 0xd0, 0x94, 0xd0, 0xb6, 0xd0, 0xbe));
        $this->assertEquals([0xd0, 0x94, 0xd0, 0xb6, 0xd0, 0xbe], $stream->readBytes(100));
        $this->assertNull($stream->readBytes(1));
    }
    public function testPointerOffsetCanBeSet()
    {
        $stream = new \_PhpScoperddde3ba4aebc\Symfony\Component\Mime\CharacterStream(\pack('C*', 0xd0, 0x94, 0xd0, 0xb6, 0xd0, 0xbe));
        $this->assertSame(\pack('C*', 0xd0, 0x94), $stream->read(1));
        $stream->setPointer(0);
        $this->assertSame(\pack('C*', 0xd0, 0x94), $stream->read(1));
        $stream->setPointer(2);
        $this->assertSame(\pack('C*', 0xd0, 0xbe), $stream->read(1));
    }
    public function testAlgorithmWithFixedWidthCharsets()
    {
        $stream = new \_PhpScoperddde3ba4aebc\Symfony\Component\Mime\CharacterStream(\pack('C*', 0xd1, 0x8d, 0xd0, 0xbb, 0xd0, 0xb0));
        $this->assertSame(\pack('C*', 0xd1, 0x8d), $stream->read(1));
        $this->assertSame(\pack('C*', 0xd0, 0xbb), $stream->read(1));
        $this->assertSame(\pack('C*', 0xd0, 0xb0), $stream->read(1));
        $this->assertNull($stream->read(1));
    }
}
