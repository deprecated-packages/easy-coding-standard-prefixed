<?php

declare (strict_types=1);
namespace _PhpScoper528afa732cbd\PhpParser\ErrorHandler;

use _PhpScoper528afa732cbd\PhpParser\Error;
use _PhpScoper528afa732cbd\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper528afa732cbd\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper528afa732cbd\PhpParser\Error $error)
    {
        throw $error;
    }
}
