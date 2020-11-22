<?php

declare (strict_types=1);
namespace _PhpScoper21fff473f90a\PhpParser\ErrorHandler;

use _PhpScoper21fff473f90a\PhpParser\Error;
use _PhpScoper21fff473f90a\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper21fff473f90a\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper21fff473f90a\PhpParser\Error $error)
    {
        throw $error;
    }
}
