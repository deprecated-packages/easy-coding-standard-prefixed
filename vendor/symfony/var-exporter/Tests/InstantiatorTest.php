<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper58a0a169dcfb\Symfony\Component\VarExporter\Tests;

use _PhpScoper58a0a169dcfb\PHPUnit\Framework\TestCase;
use _PhpScoper58a0a169dcfb\Symfony\Component\VarExporter\Instantiator;
class InstantiatorTest extends \_PhpScoper58a0a169dcfb\PHPUnit\Framework\TestCase
{
    /**
     * @expectedException \Symfony\Component\VarExporter\Exception\ClassNotFoundException
     * @expectedExceptionMessage Class "SomeNotExistingClass" not found.
     */
    public function testNotFoundClass()
    {
        \_PhpScoper58a0a169dcfb\Symfony\Component\VarExporter\Instantiator::instantiate('SomeNotExistingClass');
    }
    /**
     * @dataProvider provideFailingInstantiation
     * @expectedException \Symfony\Component\VarExporter\Exception\NotInstantiableTypeException
     * @expectedExceptionMessageRegexp Type ".*" is not instantiable.
     */
    public function testFailingInstantiation(string $class)
    {
        \_PhpScoper58a0a169dcfb\Symfony\Component\VarExporter\Instantiator::instantiate($class);
    }
    public function provideFailingInstantiation()
    {
        (yield array('ReflectionClass'));
        (yield array('SplHeap'));
        (yield array('Throwable'));
        (yield array('Closure'));
        (yield array('SplFileInfo'));
    }
    public function testInstantiate()
    {
        $this->assertEquals((object) array('p' => 123), \_PhpScoper58a0a169dcfb\Symfony\Component\VarExporter\Instantiator::instantiate('stdClass', array('p' => 123)));
        $this->assertEquals((object) array('p' => 123), \_PhpScoper58a0a169dcfb\Symfony\Component\VarExporter\Instantiator::instantiate('STDcLASS', array('p' => 123)));
        $this->assertEquals(new \ArrayObject(array(123)), \_PhpScoper58a0a169dcfb\Symfony\Component\VarExporter\Instantiator::instantiate(\ArrayObject::class, array("\0" => array(array(123)))));
        $expected = array("\0" . __NAMESPACE__ . "\\Bar\0priv" => 123, "\0" . __NAMESPACE__ . "\\Foo\0priv" => 234);
        $this->assertSame($expected, (array) \_PhpScoper58a0a169dcfb\Symfony\Component\VarExporter\Instantiator::instantiate(\_PhpScoper58a0a169dcfb\Symfony\Component\VarExporter\Tests\Bar::class, array('priv' => 123), array(\_PhpScoper58a0a169dcfb\Symfony\Component\VarExporter\Tests\Foo::class => array('priv' => 234))));
        $e = \_PhpScoper58a0a169dcfb\Symfony\Component\VarExporter\Instantiator::instantiate('Exception', array('foo' => 123, 'trace' => array(234)));
        $this->assertSame(123, $e->foo);
        $this->assertSame(array(234), $e->getTrace());
    }
}
class Foo
{
    private $priv;
}
class Bar extends \_PhpScoper58a0a169dcfb\Symfony\Component\VarExporter\Tests\Foo
{
    private $priv;
}
