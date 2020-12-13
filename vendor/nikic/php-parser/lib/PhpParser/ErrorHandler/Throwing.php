<?php

declare (strict_types=1);
namespace _PhpScoper4298f97f3cb3\PhpParser\ErrorHandler;

use _PhpScoper4298f97f3cb3\PhpParser\Error;
use _PhpScoper4298f97f3cb3\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper4298f97f3cb3\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper4298f97f3cb3\PhpParser\Error $error)
    {
        throw $error;
    }
}
