<?php

declare (strict_types=1);
namespace _PhpScopera40fc53e636b\PhpParser\ErrorHandler;

use _PhpScopera40fc53e636b\PhpParser\Error;
use _PhpScopera40fc53e636b\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopera40fc53e636b\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopera40fc53e636b\PhpParser\Error $error)
    {
        throw $error;
    }
}
