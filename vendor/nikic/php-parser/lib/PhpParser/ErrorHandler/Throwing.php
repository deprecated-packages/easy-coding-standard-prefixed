<?php

declare (strict_types=1);
namespace _PhpScoper908feaf49cd8\PhpParser\ErrorHandler;

use _PhpScoper908feaf49cd8\PhpParser\Error;
use _PhpScoper908feaf49cd8\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper908feaf49cd8\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper908feaf49cd8\PhpParser\Error $error)
    {
        throw $error;
    }
}
