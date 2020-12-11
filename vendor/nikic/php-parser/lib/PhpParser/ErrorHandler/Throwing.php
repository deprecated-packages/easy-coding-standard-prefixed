<?php

declare (strict_types=1);
namespace _PhpScopera061b8a47e36\PhpParser\ErrorHandler;

use _PhpScopera061b8a47e36\PhpParser\Error;
use _PhpScopera061b8a47e36\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopera061b8a47e36\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopera061b8a47e36\PhpParser\Error $error)
    {
        throw $error;
    }
}
