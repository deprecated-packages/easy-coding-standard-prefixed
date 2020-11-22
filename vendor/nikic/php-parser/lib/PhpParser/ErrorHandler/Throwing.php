<?php

declare (strict_types=1);
namespace _PhpScopera88a8b9f064a\PhpParser\ErrorHandler;

use _PhpScopera88a8b9f064a\PhpParser\Error;
use _PhpScopera88a8b9f064a\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopera88a8b9f064a\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopera88a8b9f064a\PhpParser\Error $error)
    {
        throw $error;
    }
}
