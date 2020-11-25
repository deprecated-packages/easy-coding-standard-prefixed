<?php

declare (strict_types=1);
namespace _PhpScoper2f75f00bf6fa\PhpParser\ErrorHandler;

use _PhpScoper2f75f00bf6fa\PhpParser\Error;
use _PhpScoper2f75f00bf6fa\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper2f75f00bf6fa\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper2f75f00bf6fa\PhpParser\Error $error)
    {
        throw $error;
    }
}
