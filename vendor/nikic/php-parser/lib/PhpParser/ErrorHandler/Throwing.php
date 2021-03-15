<?php

declare (strict_types=1);
namespace _PhpScoper64e7ad844899\PhpParser\ErrorHandler;

use _PhpScoper64e7ad844899\PhpParser\Error;
use _PhpScoper64e7ad844899\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper64e7ad844899\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper64e7ad844899\PhpParser\Error $error)
    {
        throw $error;
    }
}
