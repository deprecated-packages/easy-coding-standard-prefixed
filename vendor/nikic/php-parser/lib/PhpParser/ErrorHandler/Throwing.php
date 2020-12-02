<?php

declare (strict_types=1);
namespace _PhpScoperf62d28230928\PhpParser\ErrorHandler;

use _PhpScoperf62d28230928\PhpParser\Error;
use _PhpScoperf62d28230928\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperf62d28230928\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperf62d28230928\PhpParser\Error $error)
    {
        throw $error;
    }
}
