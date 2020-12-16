<?php

declare (strict_types=1);
namespace _PhpScoperd35c27cd4b09\PhpParser\ErrorHandler;

use _PhpScoperd35c27cd4b09\PhpParser\Error;
use _PhpScoperd35c27cd4b09\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperd35c27cd4b09\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperd35c27cd4b09\PhpParser\Error $error)
    {
        throw $error;
    }
}
