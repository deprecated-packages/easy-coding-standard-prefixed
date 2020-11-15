<?php

declare (strict_types=1);
namespace _PhpScoper21763e6c7ac4\PhpParser\ErrorHandler;

use _PhpScoper21763e6c7ac4\PhpParser\Error;
use _PhpScoper21763e6c7ac4\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper21763e6c7ac4\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper21763e6c7ac4\PhpParser\Error $error)
    {
        throw $error;
    }
}
