<?php

declare (strict_types=1);
namespace _PhpScoperf65af7a6d9a0\PhpParser\ErrorHandler;

use _PhpScoperf65af7a6d9a0\PhpParser\Error;
use _PhpScoperf65af7a6d9a0\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperf65af7a6d9a0\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperf65af7a6d9a0\PhpParser\Error $error)
    {
        throw $error;
    }
}
