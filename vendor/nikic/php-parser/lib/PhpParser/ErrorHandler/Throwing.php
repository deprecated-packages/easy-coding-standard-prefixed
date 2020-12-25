<?php

declare (strict_types=1);
namespace _PhpScoper069ebd53a518\PhpParser\ErrorHandler;

use _PhpScoper069ebd53a518\PhpParser\Error;
use _PhpScoper069ebd53a518\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper069ebd53a518\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper069ebd53a518\PhpParser\Error $error)
    {
        throw $error;
    }
}
