<?php

declare (strict_types=1);
namespace _PhpScoper7c1f54fd2f3a\PhpParser\ErrorHandler;

use _PhpScoper7c1f54fd2f3a\PhpParser\Error;
use _PhpScoper7c1f54fd2f3a\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper7c1f54fd2f3a\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper7c1f54fd2f3a\PhpParser\Error $error)
    {
        throw $error;
    }
}
