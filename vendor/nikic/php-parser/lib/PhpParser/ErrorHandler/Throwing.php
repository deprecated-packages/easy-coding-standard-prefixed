<?php

declare (strict_types=1);
namespace _PhpScoperd8b12759ee0d\PhpParser\ErrorHandler;

use _PhpScoperd8b12759ee0d\PhpParser\Error;
use _PhpScoperd8b12759ee0d\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperd8b12759ee0d\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperd8b12759ee0d\PhpParser\Error $error)
    {
        throw $error;
    }
}
