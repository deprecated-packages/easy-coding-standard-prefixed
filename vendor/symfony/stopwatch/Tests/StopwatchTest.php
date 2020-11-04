<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb383f16e851e\Symfony\Component\Stopwatch\Tests;

use _PhpScoperb383f16e851e\Symfony\Component\Stopwatch\Stopwatch;
/**
 * StopwatchTest.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @group time-sensitive
 */
class StopwatchTest extends \_PhpScoperb383f16e851e\PHPUnit_Framework_TestCase
{
    const DELTA = 20;
    public function testStart()
    {
        $stopwatch = new \_PhpScoperb383f16e851e\Symfony\Component\Stopwatch\Stopwatch();
        $event = $stopwatch->start('foo', 'cat');
        $this->assertInstanceOf('_PhpScoperb383f16e851e\\Symfony\\Component\\Stopwatch\\StopwatchEvent', $event);
        $this->assertEquals('cat', $event->getCategory());
        $this->assertSame($event, $stopwatch->getEvent('foo'));
    }
    public function testIsStarted()
    {
        $stopwatch = new \_PhpScoperb383f16e851e\Symfony\Component\Stopwatch\Stopwatch();
        $stopwatch->start('foo', 'cat');
        $this->assertTrue($stopwatch->isStarted('foo'));
    }
    public function testIsNotStarted()
    {
        $stopwatch = new \_PhpScoperb383f16e851e\Symfony\Component\Stopwatch\Stopwatch();
        $this->assertFalse($stopwatch->isStarted('foo'));
    }
    public function testIsNotStartedEvent()
    {
        $stopwatch = new \_PhpScoperb383f16e851e\Symfony\Component\Stopwatch\Stopwatch();
        $sections = new \ReflectionProperty('_PhpScoperb383f16e851e\\Symfony\\Component\\Stopwatch\\Stopwatch', 'sections');
        $sections->setAccessible(\true);
        $section = $sections->getValue($stopwatch);
        $events = new \ReflectionProperty('_PhpScoperb383f16e851e\\Symfony\\Component\\Stopwatch\\Section', 'events');
        $events->setAccessible(\true);
        $stopwatchMockEvent = $this->getMockBuilder('_PhpScoperb383f16e851e\\Symfony\\Component\\Stopwatch\\StopwatchEvent')->setConstructorArgs(array(\microtime(\true) * 1000))->getMock();
        $events->setValue(\end($section), array('foo' => $stopwatchMockEvent));
        $this->assertFalse($stopwatch->isStarted('foo'));
    }
    public function testStop()
    {
        $stopwatch = new \_PhpScoperb383f16e851e\Symfony\Component\Stopwatch\Stopwatch();
        $stopwatch->start('foo', 'cat');
        \usleep(200000);
        $event = $stopwatch->stop('foo');
        $this->assertInstanceOf('_PhpScoperb383f16e851e\\Symfony\\Component\\Stopwatch\\StopwatchEvent', $event);
        $this->assertEquals(200, $event->getDuration(), null, self::DELTA);
    }
    /**
     * @expectedException \LogicException
     */
    public function testUnknownEvent()
    {
        $stopwatch = new \_PhpScoperb383f16e851e\Symfony\Component\Stopwatch\Stopwatch();
        $stopwatch->getEvent('foo');
    }
    /**
     * @expectedException \LogicException
     */
    public function testStopWithoutStart()
    {
        $stopwatch = new \_PhpScoperb383f16e851e\Symfony\Component\Stopwatch\Stopwatch();
        $stopwatch->stop('foo');
    }
    public function testSection()
    {
        $stopwatch = new \_PhpScoperb383f16e851e\Symfony\Component\Stopwatch\Stopwatch();
        $stopwatch->openSection();
        $stopwatch->start('foo', 'cat');
        $stopwatch->stop('foo');
        $stopwatch->start('bar', 'cat');
        $stopwatch->stop('bar');
        $stopwatch->stopSection('1');
        $stopwatch->openSection();
        $stopwatch->start('foobar', 'cat');
        $stopwatch->stop('foobar');
        $stopwatch->stopSection('2');
        $stopwatch->openSection();
        $stopwatch->start('foobar', 'cat');
        $stopwatch->stop('foobar');
        $stopwatch->stopSection('0');
        // the section is an event by itself
        $this->assertCount(3, $stopwatch->getSectionEvents('1'));
        $this->assertCount(2, $stopwatch->getSectionEvents('2'));
        $this->assertCount(2, $stopwatch->getSectionEvents('0'));
    }
    public function testReopenASection()
    {
        $stopwatch = new \_PhpScoperb383f16e851e\Symfony\Component\Stopwatch\Stopwatch();
        $stopwatch->openSection();
        $stopwatch->start('foo', 'cat');
        $stopwatch->stopSection('section');
        $stopwatch->openSection('section');
        $stopwatch->start('bar', 'cat');
        $stopwatch->stopSection('section');
        $events = $stopwatch->getSectionEvents('section');
        $this->assertCount(3, $events);
        $this->assertCount(2, $events['__section__']->getPeriods());
    }
    /**
     * @expectedException \LogicException
     */
    public function testReopenANewSectionShouldThrowAnException()
    {
        $stopwatch = new \_PhpScoperb383f16e851e\Symfony\Component\Stopwatch\Stopwatch();
        $stopwatch->openSection('section');
    }
}