<?php

declare (strict_types=1);
namespace _PhpScoper21c6ce8bfe5d\PhpParser\ErrorHandler;

use _PhpScoper21c6ce8bfe5d\PhpParser\Error;
use _PhpScoper21c6ce8bfe5d\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper21c6ce8bfe5d\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper21c6ce8bfe5d\PhpParser\Error $error)
    {
        throw $error;
    }
}
