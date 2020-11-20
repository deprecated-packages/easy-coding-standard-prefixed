<?php

declare (strict_types=1);
namespace _PhpScoper5a9febfbbe05\PhpParser\ErrorHandler;

use _PhpScoper5a9febfbbe05\PhpParser\Error;
use _PhpScoper5a9febfbbe05\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper5a9febfbbe05\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper5a9febfbbe05\PhpParser\Error $error)
    {
        throw $error;
    }
}
