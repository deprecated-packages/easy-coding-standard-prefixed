<?php

declare (strict_types=1);
namespace _PhpScoper167729fa1dde\PhpParser\ErrorHandler;

use _PhpScoper167729fa1dde\PhpParser\Error;
use _PhpScoper167729fa1dde\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper167729fa1dde\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper167729fa1dde\PhpParser\Error $error)
    {
        throw $error;
    }
}
