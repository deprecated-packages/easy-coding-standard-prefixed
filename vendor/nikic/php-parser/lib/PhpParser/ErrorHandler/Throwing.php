<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\PhpParser\ErrorHandler;

use _PhpScoperfacc742d2745\PhpParser\Error;
use _PhpScoperfacc742d2745\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperfacc742d2745\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperfacc742d2745\PhpParser\Error $error)
    {
        throw $error;
    }
}
