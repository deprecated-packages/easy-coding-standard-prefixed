<?php

declare (strict_types=1);
namespace _PhpScoper06c5fb6c14ed\PhpParser\ErrorHandler;

use _PhpScoper06c5fb6c14ed\PhpParser\Error;
use _PhpScoper06c5fb6c14ed\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper06c5fb6c14ed\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper06c5fb6c14ed\PhpParser\Error $error)
    {
        throw $error;
    }
}
