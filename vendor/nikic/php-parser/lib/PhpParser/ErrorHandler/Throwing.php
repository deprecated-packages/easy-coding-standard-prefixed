<?php

declare (strict_types=1);
namespace _PhpScoper83a475a0590e\PhpParser\ErrorHandler;

use _PhpScoper83a475a0590e\PhpParser\Error;
use _PhpScoper83a475a0590e\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper83a475a0590e\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper83a475a0590e\PhpParser\Error $error)
    {
        throw $error;
    }
}
