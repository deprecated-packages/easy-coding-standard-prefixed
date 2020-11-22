<?php

declare (strict_types=1);
namespace _PhpScoper3fa05b4669af\PhpParser\ErrorHandler;

use _PhpScoper3fa05b4669af\PhpParser\Error;
use _PhpScoper3fa05b4669af\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper3fa05b4669af\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper3fa05b4669af\PhpParser\Error $error)
    {
        throw $error;
    }
}
