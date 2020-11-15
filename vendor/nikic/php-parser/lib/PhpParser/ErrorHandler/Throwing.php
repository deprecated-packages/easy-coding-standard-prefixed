<?php

declare (strict_types=1);
namespace _PhpScoper64a921a5401b\PhpParser\ErrorHandler;

use _PhpScoper64a921a5401b\PhpParser\Error;
use _PhpScoper64a921a5401b\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper64a921a5401b\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper64a921a5401b\PhpParser\Error $error)
    {
        throw $error;
    }
}
