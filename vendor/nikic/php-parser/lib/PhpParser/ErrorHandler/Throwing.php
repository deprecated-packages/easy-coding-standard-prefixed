<?php

declare (strict_types=1);
namespace _PhpScoper967c4b7e296e\PhpParser\ErrorHandler;

use _PhpScoper967c4b7e296e\PhpParser\Error;
use _PhpScoper967c4b7e296e\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper967c4b7e296e\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper967c4b7e296e\PhpParser\Error $error)
    {
        throw $error;
    }
}
