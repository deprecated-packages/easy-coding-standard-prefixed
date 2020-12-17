<?php

declare (strict_types=1);
namespace _PhpScopercf909b66eba8\PhpParser\ErrorHandler;

use _PhpScopercf909b66eba8\PhpParser\Error;
use _PhpScopercf909b66eba8\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopercf909b66eba8\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopercf909b66eba8\PhpParser\Error $error)
    {
        throw $error;
    }
}
