<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\PhpParser\ErrorHandler;

use _PhpScoperedc2e0c967db\PhpParser\Error;
use _PhpScoperedc2e0c967db\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperedc2e0c967db\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperedc2e0c967db\PhpParser\Error $error)
    {
        throw $error;
    }
}
