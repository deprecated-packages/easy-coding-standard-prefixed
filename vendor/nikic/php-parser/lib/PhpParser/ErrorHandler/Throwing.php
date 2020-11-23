<?php

declare (strict_types=1);
namespace _PhpScoper7b8580219c59\PhpParser\ErrorHandler;

use _PhpScoper7b8580219c59\PhpParser\Error;
use _PhpScoper7b8580219c59\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper7b8580219c59\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper7b8580219c59\PhpParser\Error $error)
    {
        throw $error;
    }
}
