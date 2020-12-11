<?php

declare (strict_types=1);
namespace _PhpScopere4fa57261c04\PhpParser\ErrorHandler;

use _PhpScopere4fa57261c04\PhpParser\Error;
use _PhpScopere4fa57261c04\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopere4fa57261c04\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopere4fa57261c04\PhpParser\Error $error)
    {
        throw $error;
    }
}
