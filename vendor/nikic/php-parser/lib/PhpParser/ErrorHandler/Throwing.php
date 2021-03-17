<?php

declare (strict_types=1);
namespace _PhpScoper842c7347e6be\PhpParser\ErrorHandler;

use _PhpScoper842c7347e6be\PhpParser\Error;
use _PhpScoper842c7347e6be\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper842c7347e6be\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper842c7347e6be\PhpParser\Error $error)
    {
        throw $error;
    }
}
