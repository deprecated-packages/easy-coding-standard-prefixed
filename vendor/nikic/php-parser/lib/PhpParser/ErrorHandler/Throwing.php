<?php

declare (strict_types=1);
namespace _PhpScoperfa7254c25e18\PhpParser\ErrorHandler;

use _PhpScoperfa7254c25e18\PhpParser\Error;
use _PhpScoperfa7254c25e18\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperfa7254c25e18\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperfa7254c25e18\PhpParser\Error $error)
    {
        throw $error;
    }
}
