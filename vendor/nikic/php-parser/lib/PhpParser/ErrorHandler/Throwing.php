<?php

declare (strict_types=1);
namespace _PhpScoper13160cf3462c\PhpParser\ErrorHandler;

use _PhpScoper13160cf3462c\PhpParser\Error;
use _PhpScoper13160cf3462c\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper13160cf3462c\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper13160cf3462c\PhpParser\Error $error)
    {
        throw $error;
    }
}
