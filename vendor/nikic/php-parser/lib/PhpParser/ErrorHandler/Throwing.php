<?php

declare (strict_types=1);
namespace _PhpScoper5ea36b274140\PhpParser\ErrorHandler;

use _PhpScoper5ea36b274140\PhpParser\Error;
use _PhpScoper5ea36b274140\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper5ea36b274140\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper5ea36b274140\PhpParser\Error $error)
    {
        throw $error;
    }
}
