<?php

declare (strict_types=1);
namespace _PhpScoperd301db66c80c\PhpParser\ErrorHandler;

use _PhpScoperd301db66c80c\PhpParser\Error;
use _PhpScoperd301db66c80c\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperd301db66c80c\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperd301db66c80c\PhpParser\Error $error)
    {
        throw $error;
    }
}
