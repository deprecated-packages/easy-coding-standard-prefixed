<?php

declare (strict_types=1);
namespace _PhpScoper4f42ead57614\PhpParser\ErrorHandler;

use _PhpScoper4f42ead57614\PhpParser\Error;
use _PhpScoper4f42ead57614\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper4f42ead57614\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper4f42ead57614\PhpParser\Error $error)
    {
        throw $error;
    }
}
