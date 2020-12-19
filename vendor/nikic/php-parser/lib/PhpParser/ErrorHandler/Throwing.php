<?php

declare (strict_types=1);
namespace _PhpScoperd1a5bf00e83e\PhpParser\ErrorHandler;

use _PhpScoperd1a5bf00e83e\PhpParser\Error;
use _PhpScoperd1a5bf00e83e\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperd1a5bf00e83e\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperd1a5bf00e83e\PhpParser\Error $error)
    {
        throw $error;
    }
}
