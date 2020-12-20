<?php

declare (strict_types=1);
namespace _PhpScoper967d20dce97a\PhpParser\ErrorHandler;

use _PhpScoper967d20dce97a\PhpParser\Error;
use _PhpScoper967d20dce97a\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper967d20dce97a\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper967d20dce97a\PhpParser\Error $error)
    {
        throw $error;
    }
}
