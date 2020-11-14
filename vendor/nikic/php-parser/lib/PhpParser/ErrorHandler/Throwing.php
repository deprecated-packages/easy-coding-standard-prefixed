<?php

declare (strict_types=1);
namespace _PhpScoperd4937ee9b515\PhpParser\ErrorHandler;

use _PhpScoperd4937ee9b515\PhpParser\Error;
use _PhpScoperd4937ee9b515\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperd4937ee9b515\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperd4937ee9b515\PhpParser\Error $error)
    {
        throw $error;
    }
}
