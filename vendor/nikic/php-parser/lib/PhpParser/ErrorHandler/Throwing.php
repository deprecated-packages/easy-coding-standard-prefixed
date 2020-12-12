<?php

declare (strict_types=1);
namespace _PhpScoper3e7ab659bd82\PhpParser\ErrorHandler;

use _PhpScoper3e7ab659bd82\PhpParser\Error;
use _PhpScoper3e7ab659bd82\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper3e7ab659bd82\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper3e7ab659bd82\PhpParser\Error $error)
    {
        throw $error;
    }
}
