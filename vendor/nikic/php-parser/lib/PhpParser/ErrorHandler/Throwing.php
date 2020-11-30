<?php

declare (strict_types=1);
namespace _PhpScoper2637e9a72c68\PhpParser\ErrorHandler;

use _PhpScoper2637e9a72c68\PhpParser\Error;
use _PhpScoper2637e9a72c68\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper2637e9a72c68\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper2637e9a72c68\PhpParser\Error $error)
    {
        throw $error;
    }
}
