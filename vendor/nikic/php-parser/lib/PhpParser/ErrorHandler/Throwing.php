<?php

declare (strict_types=1);
namespace _PhpScoper18bd934c069f\PhpParser\ErrorHandler;

use _PhpScoper18bd934c069f\PhpParser\Error;
use _PhpScoper18bd934c069f\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper18bd934c069f\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper18bd934c069f\PhpParser\Error $error)
    {
        throw $error;
    }
}
