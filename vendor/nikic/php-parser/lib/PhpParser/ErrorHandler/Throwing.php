<?php

declare (strict_types=1);
namespace _PhpScoper229e8121cf9f\PhpParser\ErrorHandler;

use _PhpScoper229e8121cf9f\PhpParser\Error;
use _PhpScoper229e8121cf9f\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper229e8121cf9f\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper229e8121cf9f\PhpParser\Error $error)
    {
        throw $error;
    }
}
