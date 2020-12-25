<?php

declare (strict_types=1);
namespace _PhpScoper15c5423f4731\PhpParser\ErrorHandler;

use _PhpScoper15c5423f4731\PhpParser\Error;
use _PhpScoper15c5423f4731\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper15c5423f4731\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper15c5423f4731\PhpParser\Error $error)
    {
        throw $error;
    }
}
