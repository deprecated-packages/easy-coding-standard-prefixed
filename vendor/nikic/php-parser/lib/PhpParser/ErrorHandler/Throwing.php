<?php

declare (strict_types=1);
namespace _PhpScoper8acb416c2f5a\PhpParser\ErrorHandler;

use _PhpScoper8acb416c2f5a\PhpParser\Error;
use _PhpScoper8acb416c2f5a\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper8acb416c2f5a\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper8acb416c2f5a\PhpParser\Error $error)
    {
        throw $error;
    }
}
