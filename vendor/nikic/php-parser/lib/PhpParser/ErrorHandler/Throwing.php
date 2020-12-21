<?php

declare (strict_types=1);
namespace _PhpScoperb730595bc9f4\PhpParser\ErrorHandler;

use _PhpScoperb730595bc9f4\PhpParser\Error;
use _PhpScoperb730595bc9f4\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperb730595bc9f4\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperb730595bc9f4\PhpParser\Error $error)
    {
        throw $error;
    }
}
