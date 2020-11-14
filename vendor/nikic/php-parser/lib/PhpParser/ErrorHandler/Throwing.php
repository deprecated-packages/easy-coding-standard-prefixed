<?php

declare (strict_types=1);
namespace _PhpScopercda2b863d098\PhpParser\ErrorHandler;

use _PhpScopercda2b863d098\PhpParser\Error;
use _PhpScopercda2b863d098\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopercda2b863d098\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopercda2b863d098\PhpParser\Error $error)
    {
        throw $error;
    }
}
