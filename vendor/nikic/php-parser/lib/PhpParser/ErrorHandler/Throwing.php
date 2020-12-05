<?php

declare (strict_types=1);
namespace _PhpScoperbaf90856897c\PhpParser\ErrorHandler;

use _PhpScoperbaf90856897c\PhpParser\Error;
use _PhpScoperbaf90856897c\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperbaf90856897c\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperbaf90856897c\PhpParser\Error $error)
    {
        throw $error;
    }
}
