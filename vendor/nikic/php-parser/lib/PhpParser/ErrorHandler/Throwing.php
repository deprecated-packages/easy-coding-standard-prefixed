<?php

declare (strict_types=1);
namespace _PhpScoperb83706991c7f\PhpParser\ErrorHandler;

use _PhpScoperb83706991c7f\PhpParser\Error;
use _PhpScoperb83706991c7f\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperb83706991c7f\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperb83706991c7f\PhpParser\Error $error)
    {
        throw $error;
    }
}
