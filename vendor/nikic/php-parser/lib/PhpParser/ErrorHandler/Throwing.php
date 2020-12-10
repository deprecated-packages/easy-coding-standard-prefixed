<?php

declare (strict_types=1);
namespace _PhpScopera1a51450b61d\PhpParser\ErrorHandler;

use _PhpScopera1a51450b61d\PhpParser\Error;
use _PhpScopera1a51450b61d\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopera1a51450b61d\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopera1a51450b61d\PhpParser\Error $error)
    {
        throw $error;
    }
}
