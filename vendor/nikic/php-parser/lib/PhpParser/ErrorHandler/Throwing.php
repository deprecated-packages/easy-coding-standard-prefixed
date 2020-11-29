<?php

declare (strict_types=1);
namespace _PhpScoper9d73a84b09ad\PhpParser\ErrorHandler;

use _PhpScoper9d73a84b09ad\PhpParser\Error;
use _PhpScoper9d73a84b09ad\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper9d73a84b09ad\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper9d73a84b09ad\PhpParser\Error $error)
    {
        throw $error;
    }
}
