<?php

declare (strict_types=1);
namespace _PhpScoperd74b3ed28382\PhpParser\ErrorHandler;

use _PhpScoperd74b3ed28382\PhpParser\Error;
use _PhpScoperd74b3ed28382\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperd74b3ed28382\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperd74b3ed28382\PhpParser\Error $error)
    {
        throw $error;
    }
}
