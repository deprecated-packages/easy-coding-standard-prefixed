<?php

declare (strict_types=1);
namespace _PhpScoperc83f84c90b60\PhpParser\ErrorHandler;

use _PhpScoperc83f84c90b60\PhpParser\Error;
use _PhpScoperc83f84c90b60\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperc83f84c90b60\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperc83f84c90b60\PhpParser\Error $error)
    {
        throw $error;
    }
}
