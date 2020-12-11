<?php

declare (strict_types=1);
namespace _PhpScoper1e80a2e03314\PhpParser\ErrorHandler;

use _PhpScoper1e80a2e03314\PhpParser\Error;
use _PhpScoper1e80a2e03314\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper1e80a2e03314\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper1e80a2e03314\PhpParser\Error $error)
    {
        throw $error;
    }
}
