<?php

declare (strict_types=1);
namespace _PhpScoper2b44cb0c30af\PhpParser\ErrorHandler;

use _PhpScoper2b44cb0c30af\PhpParser\Error;
use _PhpScoper2b44cb0c30af\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper2b44cb0c30af\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper2b44cb0c30af\PhpParser\Error $error)
    {
        throw $error;
    }
}
