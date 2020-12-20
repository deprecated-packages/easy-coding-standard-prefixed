<?php

declare (strict_types=1);
namespace _PhpScoper57210e33e43a\PhpParser\ErrorHandler;

use _PhpScoper57210e33e43a\PhpParser\Error;
use _PhpScoper57210e33e43a\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper57210e33e43a\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper57210e33e43a\PhpParser\Error $error)
    {
        throw $error;
    }
}
