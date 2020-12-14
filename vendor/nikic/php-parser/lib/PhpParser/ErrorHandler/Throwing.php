<?php

declare (strict_types=1);
namespace _PhpScoper6224e3b16fcc\PhpParser\ErrorHandler;

use _PhpScoper6224e3b16fcc\PhpParser\Error;
use _PhpScoper6224e3b16fcc\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper6224e3b16fcc\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper6224e3b16fcc\PhpParser\Error $error)
    {
        throw $error;
    }
}
