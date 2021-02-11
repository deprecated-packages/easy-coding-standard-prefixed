<?php

declare (strict_types=1);
namespace _PhpScoperef5048aa2573\PhpParser\ErrorHandler;

use _PhpScoperef5048aa2573\PhpParser\Error;
use _PhpScoperef5048aa2573\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperef5048aa2573\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperef5048aa2573\PhpParser\Error $error)
    {
        throw $error;
    }
}
