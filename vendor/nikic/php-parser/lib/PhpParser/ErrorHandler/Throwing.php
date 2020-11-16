<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\PhpParser\ErrorHandler;

use _PhpScoperbcc0395698f8\PhpParser\Error;
use _PhpScoperbcc0395698f8\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperbcc0395698f8\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperbcc0395698f8\PhpParser\Error $error)
    {
        throw $error;
    }
}
