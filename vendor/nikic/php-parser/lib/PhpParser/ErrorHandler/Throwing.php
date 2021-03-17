<?php

declare (strict_types=1);
namespace _PhpScoper246d3630afdd\PhpParser\ErrorHandler;

use _PhpScoper246d3630afdd\PhpParser\Error;
use _PhpScoper246d3630afdd\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper246d3630afdd\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper246d3630afdd\PhpParser\Error $error)
    {
        throw $error;
    }
}
