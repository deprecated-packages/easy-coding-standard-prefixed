<?php

declare (strict_types=1);
namespace _PhpScoper578a67c80b2b\PhpParser\ErrorHandler;

use _PhpScoper578a67c80b2b\PhpParser\Error;
use _PhpScoper578a67c80b2b\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper578a67c80b2b\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper578a67c80b2b\PhpParser\Error $error)
    {
        throw $error;
    }
}
