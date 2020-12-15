<?php

declare (strict_types=1);
namespace _PhpScoper47644ab3aa9a\PhpParser\ErrorHandler;

use _PhpScoper47644ab3aa9a\PhpParser\Error;
use _PhpScoper47644ab3aa9a\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper47644ab3aa9a\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper47644ab3aa9a\PhpParser\Error $error)
    {
        throw $error;
    }
}
