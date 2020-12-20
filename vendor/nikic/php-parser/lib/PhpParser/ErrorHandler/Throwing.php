<?php

declare (strict_types=1);
namespace _PhpScopere205696a9dd6\PhpParser\ErrorHandler;

use _PhpScopere205696a9dd6\PhpParser\Error;
use _PhpScopere205696a9dd6\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopere205696a9dd6\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopere205696a9dd6\PhpParser\Error $error)
    {
        throw $error;
    }
}
