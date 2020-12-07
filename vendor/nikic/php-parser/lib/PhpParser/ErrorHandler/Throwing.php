<?php

declare (strict_types=1);
namespace _PhpScoperfa521053d812\PhpParser\ErrorHandler;

use _PhpScoperfa521053d812\PhpParser\Error;
use _PhpScoperfa521053d812\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperfa521053d812\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperfa521053d812\PhpParser\Error $error)
    {
        throw $error;
    }
}
