<?php

declare (strict_types=1);
namespace _PhpScoper8de082cbb8c7\PhpParser\ErrorHandler;

use _PhpScoper8de082cbb8c7\PhpParser\Error;
use _PhpScoper8de082cbb8c7\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper8de082cbb8c7\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper8de082cbb8c7\PhpParser\Error $error)
    {
        throw $error;
    }
}
