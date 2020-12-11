<?php

declare (strict_types=1);
namespace _PhpScoperea337ed74749\PhpParser\ErrorHandler;

use _PhpScoperea337ed74749\PhpParser\Error;
use _PhpScoperea337ed74749\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperea337ed74749\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperea337ed74749\PhpParser\Error $error)
    {
        throw $error;
    }
}
