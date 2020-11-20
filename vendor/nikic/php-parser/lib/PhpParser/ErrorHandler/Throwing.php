<?php

declare (strict_types=1);
namespace _PhpScoperb6d4bd368bd9\PhpParser\ErrorHandler;

use _PhpScoperb6d4bd368bd9\PhpParser\Error;
use _PhpScoperb6d4bd368bd9\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperb6d4bd368bd9\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperb6d4bd368bd9\PhpParser\Error $error)
    {
        throw $error;
    }
}
