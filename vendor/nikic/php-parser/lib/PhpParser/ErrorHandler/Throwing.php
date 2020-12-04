<?php

declare (strict_types=1);
namespace _PhpScopera4fc793dae73\PhpParser\ErrorHandler;

use _PhpScopera4fc793dae73\PhpParser\Error;
use _PhpScopera4fc793dae73\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopera4fc793dae73\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopera4fc793dae73\PhpParser\Error $error)
    {
        throw $error;
    }
}
