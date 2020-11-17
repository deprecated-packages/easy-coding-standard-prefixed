<?php

declare (strict_types=1);
namespace _PhpScoperad4b7e2c09d8\PhpParser\ErrorHandler;

use _PhpScoperad4b7e2c09d8\PhpParser\Error;
use _PhpScoperad4b7e2c09d8\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperad4b7e2c09d8\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperad4b7e2c09d8\PhpParser\Error $error)
    {
        throw $error;
    }
}
