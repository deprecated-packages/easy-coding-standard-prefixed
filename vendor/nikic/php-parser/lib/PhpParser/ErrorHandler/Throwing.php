<?php

declare (strict_types=1);
namespace _PhpScoperf7b66f9e3817\PhpParser\ErrorHandler;

use _PhpScoperf7b66f9e3817\PhpParser\Error;
use _PhpScoperf7b66f9e3817\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperf7b66f9e3817\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperf7b66f9e3817\PhpParser\Error $error)
    {
        throw $error;
    }
}
