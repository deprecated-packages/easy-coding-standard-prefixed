<?php

declare (strict_types=1);
namespace _PhpScopera09818bc50da\PhpParser\ErrorHandler;

use _PhpScopera09818bc50da\PhpParser\Error;
use _PhpScopera09818bc50da\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopera09818bc50da\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopera09818bc50da\PhpParser\Error $error)
    {
        throw $error;
    }
}
