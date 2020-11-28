<?php

declare (strict_types=1);
namespace _PhpScoperfcce67077a55\PhpParser\ErrorHandler;

use _PhpScoperfcce67077a55\PhpParser\Error;
use _PhpScoperfcce67077a55\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperfcce67077a55\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperfcce67077a55\PhpParser\Error $error)
    {
        throw $error;
    }
}
