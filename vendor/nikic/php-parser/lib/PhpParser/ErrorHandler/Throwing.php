<?php

declare (strict_types=1);
namespace _PhpScoperd675aaf00c76\PhpParser\ErrorHandler;

use _PhpScoperd675aaf00c76\PhpParser\Error;
use _PhpScoperd675aaf00c76\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperd675aaf00c76\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperd675aaf00c76\PhpParser\Error $error)
    {
        throw $error;
    }
}
