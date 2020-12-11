<?php

declare (strict_types=1);
namespace _PhpScoperc7c7dddc9238\PhpParser\ErrorHandler;

use _PhpScoperc7c7dddc9238\PhpParser\Error;
use _PhpScoperc7c7dddc9238\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperc7c7dddc9238\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperc7c7dddc9238\PhpParser\Error $error)
    {
        throw $error;
    }
}
