<?php

declare (strict_types=1);
namespace _PhpScoperdc8fbcd7c69d\PhpParser\ErrorHandler;

use _PhpScoperdc8fbcd7c69d\PhpParser\Error;
use _PhpScoperdc8fbcd7c69d\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperdc8fbcd7c69d\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperdc8fbcd7c69d\PhpParser\Error $error)
    {
        throw $error;
    }
}
