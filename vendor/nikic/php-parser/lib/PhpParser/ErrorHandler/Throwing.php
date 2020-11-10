<?php

declare (strict_types=1);
namespace _PhpScoper666af036e800\PhpParser\ErrorHandler;

use _PhpScoper666af036e800\PhpParser\Error;
use _PhpScoper666af036e800\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper666af036e800\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper666af036e800\PhpParser\Error $error)
    {
        throw $error;
    }
}
