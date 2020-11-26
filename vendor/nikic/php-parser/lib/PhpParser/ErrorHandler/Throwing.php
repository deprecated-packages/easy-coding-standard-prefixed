<?php

declare (strict_types=1);
namespace _PhpScoperb2e2c0c42e71\PhpParser\ErrorHandler;

use _PhpScoperb2e2c0c42e71\PhpParser\Error;
use _PhpScoperb2e2c0c42e71\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperb2e2c0c42e71\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperb2e2c0c42e71\PhpParser\Error $error)
    {
        throw $error;
    }
}
