<?php

declare (strict_types=1);
namespace _PhpScoperdeea1786e972\PhpParser\ErrorHandler;

use _PhpScoperdeea1786e972\PhpParser\Error;
use _PhpScoperdeea1786e972\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperdeea1786e972\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperdeea1786e972\PhpParser\Error $error)
    {
        throw $error;
    }
}
