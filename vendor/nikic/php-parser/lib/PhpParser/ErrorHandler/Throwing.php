<?php

declare (strict_types=1);
namespace _PhpScoper6625323d9c29\PhpParser\ErrorHandler;

use _PhpScoper6625323d9c29\PhpParser\Error;
use _PhpScoper6625323d9c29\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper6625323d9c29\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper6625323d9c29\PhpParser\Error $error)
    {
        throw $error;
    }
}
