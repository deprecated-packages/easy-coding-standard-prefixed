<?php

declare (strict_types=1);
namespace _PhpScoper11a6395266c4\PhpParser\ErrorHandler;

use _PhpScoper11a6395266c4\PhpParser\Error;
use _PhpScoper11a6395266c4\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper11a6395266c4\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper11a6395266c4\PhpParser\Error $error)
    {
        throw $error;
    }
}
