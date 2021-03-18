<?php

declare (strict_types=1);
namespace _PhpScoper0ba97041430d\PhpParser\ErrorHandler;

use _PhpScoper0ba97041430d\PhpParser\Error;
use _PhpScoper0ba97041430d\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper0ba97041430d\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper0ba97041430d\PhpParser\Error $error)
    {
        throw $error;
    }
}
