<?php

declare (strict_types=1);
namespace _PhpScoperc233426b15e0\PhpParser\ErrorHandler;

use _PhpScoperc233426b15e0\PhpParser\Error;
use _PhpScoperc233426b15e0\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperc233426b15e0\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperc233426b15e0\PhpParser\Error $error)
    {
        throw $error;
    }
}
