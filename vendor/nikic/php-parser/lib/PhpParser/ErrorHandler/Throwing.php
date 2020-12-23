<?php

declare (strict_types=1);
namespace _PhpScoper14cb6de5473d\PhpParser\ErrorHandler;

use _PhpScoper14cb6de5473d\PhpParser\Error;
use _PhpScoper14cb6de5473d\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper14cb6de5473d\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper14cb6de5473d\PhpParser\Error $error)
    {
        throw $error;
    }
}
