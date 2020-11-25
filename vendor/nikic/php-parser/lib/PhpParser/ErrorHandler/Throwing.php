<?php

declare (strict_types=1);
namespace _PhpScoperaa402dd1b1f1\PhpParser\ErrorHandler;

use _PhpScoperaa402dd1b1f1\PhpParser\Error;
use _PhpScoperaa402dd1b1f1\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperaa402dd1b1f1\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperaa402dd1b1f1\PhpParser\Error $error)
    {
        throw $error;
    }
}
