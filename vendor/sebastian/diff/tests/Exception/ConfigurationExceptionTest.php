<?php

declare (strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper224ae0b86670\SebastianBergmann\Diff;

use _PhpScoper224ae0b86670\PHPUnit\Framework\TestCase;
/**
 * @covers SebastianBergmann\Diff\ConfigurationException
 */
final class ConfigurationExceptionTest extends \_PhpScoper224ae0b86670\PHPUnit\Framework\TestCase
{
    public function testConstructWithDefaults() : void
    {
        $e = new \_PhpScoper224ae0b86670\SebastianBergmann\Diff\ConfigurationException('test', 'A', 'B');
        $this->assertSame(0, $e->getCode());
        $this->assertNull($e->getPrevious());
        $this->assertSame('Option "test" must be A, got "string#B".', $e->getMessage());
    }
    public function testConstruct() : void
    {
        $e = new \_PhpScoper224ae0b86670\SebastianBergmann\Diff\ConfigurationException('test', 'integer', new \SplFileInfo(__FILE__), 789, new \BadMethodCallException(__METHOD__));
        $this->assertSame('Option "test" must be integer, got "SplFileInfo".', $e->getMessage());
    }
}
