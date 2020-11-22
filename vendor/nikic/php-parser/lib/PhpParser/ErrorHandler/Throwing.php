<?php

declare (strict_types=1);
namespace _PhpScoper66292c14b658\PhpParser\ErrorHandler;

use _PhpScoper66292c14b658\PhpParser\Error;
use _PhpScoper66292c14b658\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper66292c14b658\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper66292c14b658\PhpParser\Error $error)
    {
        throw $error;
    }
}
