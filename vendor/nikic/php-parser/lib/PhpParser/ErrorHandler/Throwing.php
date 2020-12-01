<?php

declare (strict_types=1);
namespace _PhpScoper9613f3fac51d\PhpParser\ErrorHandler;

use _PhpScoper9613f3fac51d\PhpParser\Error;
use _PhpScoper9613f3fac51d\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper9613f3fac51d\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper9613f3fac51d\PhpParser\Error $error)
    {
        throw $error;
    }
}
