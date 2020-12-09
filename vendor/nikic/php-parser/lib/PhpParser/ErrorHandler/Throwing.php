<?php

declare (strict_types=1);
namespace _PhpScoperdf15f2b748e9\PhpParser\ErrorHandler;

use _PhpScoperdf15f2b748e9\PhpParser\Error;
use _PhpScoperdf15f2b748e9\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperdf15f2b748e9\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperdf15f2b748e9\PhpParser\Error $error)
    {
        throw $error;
    }
}
