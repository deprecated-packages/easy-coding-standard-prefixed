<?php

declare (strict_types=1);
namespace _PhpScoperbd5c5a045153\PhpParser\ErrorHandler;

use _PhpScoperbd5c5a045153\PhpParser\Error;
use _PhpScoperbd5c5a045153\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperbd5c5a045153\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperbd5c5a045153\PhpParser\Error $error)
    {
        throw $error;
    }
}
