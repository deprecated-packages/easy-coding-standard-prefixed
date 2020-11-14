<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e\PhpParser\ErrorHandler;

use _PhpScoperecb978830f1e\PhpParser\Error;
use _PhpScoperecb978830f1e\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperecb978830f1e\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperecb978830f1e\PhpParser\Error $error)
    {
        throw $error;
    }
}
