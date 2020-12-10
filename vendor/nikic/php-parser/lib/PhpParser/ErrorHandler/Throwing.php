<?php

declare (strict_types=1);
namespace _PhpScoper9ef667a5e42c\PhpParser\ErrorHandler;

use _PhpScoper9ef667a5e42c\PhpParser\Error;
use _PhpScoper9ef667a5e42c\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper9ef667a5e42c\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper9ef667a5e42c\PhpParser\Error $error)
    {
        throw $error;
    }
}
