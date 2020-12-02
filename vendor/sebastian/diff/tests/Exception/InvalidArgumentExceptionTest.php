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
namespace _PhpScoper992f4af8b9e0\SebastianBergmann\Diff;

use _PhpScoper992f4af8b9e0\PHPUnit\Framework\TestCase;
/**
 * @covers SebastianBergmann\Diff\InvalidArgumentException
 */
final class InvalidArgumentExceptionTest extends \_PhpScoper992f4af8b9e0\PHPUnit\Framework\TestCase
{
    public function testInvalidArgumentException() : void
    {
        $previousException = new \LogicException();
        $message = 'test';
        $code = 123;
        $exception = new \_PhpScoper992f4af8b9e0\SebastianBergmann\Diff\InvalidArgumentException($message, $code, $previousException);
        $this->assertInstanceOf(\_PhpScoper992f4af8b9e0\SebastianBergmann\Diff\Exception::class, $exception);
        $this->assertSame($message, $exception->getMessage());
        $this->assertSame($code, $exception->getCode());
        $this->assertSame($previousException, $exception->getPrevious());
    }
}
