<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfcce67077a55\Symfony\Component\Mime\Tests;

use _PhpScoperfcce67077a55\PHPUnit\Framework\TestCase;
use _PhpScoperfcce67077a55\Symfony\Component\Mime\Address;
use _PhpScoperfcce67077a55\Symfony\Component\Mime\NamedAddress;
class AddressTest extends \_PhpScoperfcce67077a55\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $a = new \_PhpScoperfcce67077a55\Symfony\Component\Mime\Address('fabien@symfonï.com');
        $this->assertEquals('fabien@symfonï.com', $a->getAddress());
        $this->assertEquals('fabien@xn--symfon-nwa.com', $a->toString());
        $this->assertEquals('fabien@xn--symfon-nwa.com', $a->getEncodedAddress());
    }
    public function testConstructorWithInvalidAddress()
    {
        $this->expectException(\InvalidArgumentException::class);
        new \_PhpScoperfcce67077a55\Symfony\Component\Mime\Address('fab   pot@symfony.com');
    }
    public function testCreate()
    {
        $this->assertSame($a = new \_PhpScoperfcce67077a55\Symfony\Component\Mime\Address('fabien@symfony.com'), \_PhpScoperfcce67077a55\Symfony\Component\Mime\Address::create($a));
        $this->assertSame($b = new \_PhpScoperfcce67077a55\Symfony\Component\Mime\NamedAddress('helene@symfony.com', 'Helene'), \_PhpScoperfcce67077a55\Symfony\Component\Mime\Address::create($b));
        $this->assertEquals($a, \_PhpScoperfcce67077a55\Symfony\Component\Mime\Address::create('fabien@symfony.com'));
    }
    public function testCreateWrongArg()
    {
        $this->expectException(\InvalidArgumentException::class);
        \_PhpScoperfcce67077a55\Symfony\Component\Mime\Address::create(new \stdClass());
    }
    public function testCreateArray()
    {
        $fabien = new \_PhpScoperfcce67077a55\Symfony\Component\Mime\Address('fabien@symfony.com');
        $helene = new \_PhpScoperfcce67077a55\Symfony\Component\Mime\NamedAddress('helene@symfony.com', 'Helene');
        $this->assertSame([$fabien, $helene], \_PhpScoperfcce67077a55\Symfony\Component\Mime\Address::createArray([$fabien, $helene]));
        $this->assertEquals([$fabien], \_PhpScoperfcce67077a55\Symfony\Component\Mime\Address::createArray(['fabien@symfony.com']));
    }
    public function testCreateArrayWrongArg()
    {
        $this->expectException(\InvalidArgumentException::class);
        \_PhpScoperfcce67077a55\Symfony\Component\Mime\Address::createArray([new \stdClass()]);
    }
}
