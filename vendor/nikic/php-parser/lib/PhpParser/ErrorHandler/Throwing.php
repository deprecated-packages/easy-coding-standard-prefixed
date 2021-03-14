<?php

declare (strict_types=1);
namespace _PhpScopera1f11cc38772\PhpParser\ErrorHandler;

use _PhpScopera1f11cc38772\PhpParser\Error;
use _PhpScopera1f11cc38772\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopera1f11cc38772\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopera1f11cc38772\PhpParser\Error $error)
    {
        throw $error;
    }
}
