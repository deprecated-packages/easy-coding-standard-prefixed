<?php

declare (strict_types=1);
namespace _PhpScoperc8b83ee8976a\PhpParser\ErrorHandler;

use _PhpScoperc8b83ee8976a\PhpParser\Error;
use _PhpScoperc8b83ee8976a\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperc8b83ee8976a\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperc8b83ee8976a\PhpParser\Error $error)
    {
        throw $error;
    }
}
