<?php

declare (strict_types=1);
namespace _PhpScopera3425146d487\PhpParser\ErrorHandler;

use _PhpScopera3425146d487\PhpParser\Error;
use _PhpScopera3425146d487\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopera3425146d487\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopera3425146d487\PhpParser\Error $error)
    {
        throw $error;
    }
}
