<?php

declare (strict_types=1);
namespace _PhpScoperfcf15c26e033\PhpParser\ErrorHandler;

use _PhpScoperfcf15c26e033\PhpParser\Error;
use _PhpScoperfcf15c26e033\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperfcf15c26e033\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperfcf15c26e033\PhpParser\Error $error)
    {
        throw $error;
    }
}
