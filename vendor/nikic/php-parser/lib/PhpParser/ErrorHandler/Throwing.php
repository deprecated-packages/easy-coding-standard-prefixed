<?php

declare (strict_types=1);
namespace _PhpScopere341acab57d4\PhpParser\ErrorHandler;

use _PhpScopere341acab57d4\PhpParser\Error;
use _PhpScopere341acab57d4\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopere341acab57d4\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopere341acab57d4\PhpParser\Error $error)
    {
        throw $error;
    }
}
