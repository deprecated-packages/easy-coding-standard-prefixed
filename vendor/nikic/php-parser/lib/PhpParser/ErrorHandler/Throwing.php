<?php

declare (strict_types=1);
namespace _PhpScoper8db4616aa69d\PhpParser\ErrorHandler;

use _PhpScoper8db4616aa69d\PhpParser\Error;
use _PhpScoper8db4616aa69d\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper8db4616aa69d\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper8db4616aa69d\PhpParser\Error $error)
    {
        throw $error;
    }
}
