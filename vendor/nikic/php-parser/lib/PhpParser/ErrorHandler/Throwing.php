<?php

declare (strict_types=1);
namespace _PhpScopera37d6fb0b1ab\PhpParser\ErrorHandler;

use _PhpScopera37d6fb0b1ab\PhpParser\Error;
use _PhpScopera37d6fb0b1ab\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopera37d6fb0b1ab\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopera37d6fb0b1ab\PhpParser\Error $error)
    {
        throw $error;
    }
}
