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
namespace _PhpScoperdc8fbcd7c69d\SebastianBergmann\Diff;

use _PhpScoperdc8fbcd7c69d\PHPUnit\Framework\TestCase;
/**
 * @covers SebastianBergmann\Diff\InvalidArgumentException
 */
final class InvalidArgumentExceptionTest extends \_PhpScoperdc8fbcd7c69d\PHPUnit\Framework\TestCase
{
    public function testInvalidArgumentException() : void
    {
        $previousException = new \LogicException();
        $message = 'test';
        $code = 123;
        $exception = new \_PhpScoperdc8fbcd7c69d\SebastianBergmann\Diff\InvalidArgumentException($message, $code, $previousException);
        $this->assertInstanceOf(\_PhpScoperdc8fbcd7c69d\SebastianBergmann\Diff\Exception::class, $exception);
        $this->assertSame($message, $exception->getMessage());
        $this->assertSame($code, $exception->getCode());
        $this->assertSame($previousException, $exception->getPrevious());
    }
}
