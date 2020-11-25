<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperaa402dd1b1f1\Symfony\Component\VarExporter\Tests;

use _PhpScoperaa402dd1b1f1\PHPUnit\Framework\TestCase;
use _PhpScoperaa402dd1b1f1\Symfony\Component\VarExporter\Instantiator;
class InstantiatorTest extends \_PhpScoperaa402dd1b1f1\PHPUnit\Framework\TestCase
{
    /**
     * @expectedException \Symfony\Component\VarExporter\Exception\ClassNotFoundException
     * @expectedExceptionMessage Class "SomeNotExistingClass" not found.
     */
    public function testNotFoundClass()
    {
        \_PhpScoperaa402dd1b1f1\Symfony\Component\VarExporter\Instantiator::instantiate('SomeNotExistingClass');
    }
    /**
     * @dataProvider provideFailingInstantiation
     * @expectedException \Symfony\Component\VarExporter\Exception\NotInstantiableTypeException
     * @expectedExceptionMessageRegexp Type ".*" is not instantiable.
     */
    public function testFailingInstantiation(string $class)
    {
        \_PhpScoperaa402dd1b1f1\Symfony\Component\VarExporter\Instantiator::instantiate($class);
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
        $this->assertEquals((object) array('p' => 123), \_PhpScoperaa402dd1b1f1\Symfony\Component\VarExporter\Instantiator::instantiate('stdClass', array('p' => 123)));
        $this->assertEquals((object) array('p' => 123), \_PhpScoperaa402dd1b1f1\Symfony\Component\VarExporter\Instantiator::instantiate('STDcLASS', array('p' => 123)));
        $this->assertEquals(new \ArrayObject(array(123)), \_PhpScoperaa402dd1b1f1\Symfony\Component\VarExporter\Instantiator::instantiate(\ArrayObject::class, array("\0" => array(array(123)))));
        $expected = array("\0" . __NAMESPACE__ . "\\Bar\0priv" => 123, "\0" . __NAMESPACE__ . "\\Foo\0priv" => 234);
        $this->assertSame($expected, (array) \_PhpScoperaa402dd1b1f1\Symfony\Component\VarExporter\Instantiator::instantiate(\_PhpScoperaa402dd1b1f1\Symfony\Component\VarExporter\Tests\Bar::class, array('priv' => 123), array(\_PhpScoperaa402dd1b1f1\Symfony\Component\VarExporter\Tests\Foo::class => array('priv' => 234))));
        $e = \_PhpScoperaa402dd1b1f1\Symfony\Component\VarExporter\Instantiator::instantiate('Exception', array('foo' => 123, 'trace' => array(234)));
        $this->assertSame(123, $e->foo);
        $this->assertSame(array(234), $e->getTrace());
    }
}
class Foo
{
    private $priv;
}
class Bar extends \_PhpScoperaa402dd1b1f1\Symfony\Component\VarExporter\Tests\Foo
{
    private $priv;
}
