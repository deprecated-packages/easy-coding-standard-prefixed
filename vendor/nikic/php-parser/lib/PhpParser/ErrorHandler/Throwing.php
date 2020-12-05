<?php

declare (strict_types=1);
namespace _PhpScoper56c9df53a081\PhpParser\ErrorHandler;

use _PhpScoper56c9df53a081\PhpParser\Error;
use _PhpScoper56c9df53a081\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper56c9df53a081\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper56c9df53a081\PhpParser\Error $error)
    {
        throw $error;
    }
}
