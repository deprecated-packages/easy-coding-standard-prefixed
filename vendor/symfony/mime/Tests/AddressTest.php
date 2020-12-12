<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper79449c4e744b\Symfony\Component\Mime\Tests;

use _PhpScoper79449c4e744b\PHPUnit\Framework\TestCase;
use _PhpScoper79449c4e744b\Symfony\Component\Mime\Address;
use _PhpScoper79449c4e744b\Symfony\Component\Mime\NamedAddress;
class AddressTest extends \_PhpScoper79449c4e744b\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $a = new \_PhpScoper79449c4e744b\Symfony\Component\Mime\Address('fabien@symfonï.com');
        $this->assertEquals('fabien@symfonï.com', $a->getAddress());
        $this->assertEquals('fabien@xn--symfon-nwa.com', $a->toString());
        $this->assertEquals('fabien@xn--symfon-nwa.com', $a->getEncodedAddress());
    }
    public function testConstructorWithInvalidAddress()
    {
        $this->expectException(\InvalidArgumentException::class);
        new \_PhpScoper79449c4e744b\Symfony\Component\Mime\Address('fab   pot@symfony.com');
    }
    public function testCreate()
    {
        $this->assertSame($a = new \_PhpScoper79449c4e744b\Symfony\Component\Mime\Address('fabien@symfony.com'), \_PhpScoper79449c4e744b\Symfony\Component\Mime\Address::create($a));
        $this->assertSame($b = new \_PhpScoper79449c4e744b\Symfony\Component\Mime\NamedAddress('helene@symfony.com', 'Helene'), \_PhpScoper79449c4e744b\Symfony\Component\Mime\Address::create($b));
        $this->assertEquals($a, \_PhpScoper79449c4e744b\Symfony\Component\Mime\Address::create('fabien@symfony.com'));
    }
    public function testCreateWrongArg()
    {
        $this->expectException(\InvalidArgumentException::class);
        \_PhpScoper79449c4e744b\Symfony\Component\Mime\Address::create(new \stdClass());
    }
    public function testCreateArray()
    {
        $fabien = new \_PhpScoper79449c4e744b\Symfony\Component\Mime\Address('fabien@symfony.com');
        $helene = new \_PhpScoper79449c4e744b\Symfony\Component\Mime\NamedAddress('helene@symfony.com', 'Helene');
        $this->assertSame([$fabien, $helene], \_PhpScoper79449c4e744b\Symfony\Component\Mime\Address::createArray([$fabien, $helene]));
        $this->assertEquals([$fabien], \_PhpScoper79449c4e744b\Symfony\Component\Mime\Address::createArray(['fabien@symfony.com']));
    }
    public function testCreateArrayWrongArg()
    {
        $this->expectException(\InvalidArgumentException::class);
        \_PhpScoper79449c4e744b\Symfony\Component\Mime\Address::createArray([new \stdClass()]);
    }
}
