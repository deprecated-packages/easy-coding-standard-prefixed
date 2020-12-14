<?php

declare (strict_types=1);
namespace _PhpScoperc64a4ac1af35\PhpParser\ErrorHandler;

use _PhpScoperc64a4ac1af35\PhpParser\Error;
use _PhpScoperc64a4ac1af35\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperc64a4ac1af35\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperc64a4ac1af35\PhpParser\Error $error)
    {
        throw $error;
    }
}
