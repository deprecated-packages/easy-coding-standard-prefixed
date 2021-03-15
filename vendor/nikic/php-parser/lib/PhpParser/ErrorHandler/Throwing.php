<?php

declare (strict_types=1);
namespace _PhpScoper971ef29294dd\PhpParser\ErrorHandler;

use _PhpScoper971ef29294dd\PhpParser\Error;
use _PhpScoper971ef29294dd\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper971ef29294dd\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper971ef29294dd\PhpParser\Error $error)
    {
        throw $error;
    }
}
