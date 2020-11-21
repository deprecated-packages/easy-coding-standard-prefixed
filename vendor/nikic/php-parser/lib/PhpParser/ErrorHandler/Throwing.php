<?php

declare (strict_types=1);
namespace _PhpScopera4be459e5e3d\PhpParser\ErrorHandler;

use _PhpScopera4be459e5e3d\PhpParser\Error;
use _PhpScopera4be459e5e3d\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopera4be459e5e3d\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopera4be459e5e3d\PhpParser\Error $error)
    {
        throw $error;
    }
}
