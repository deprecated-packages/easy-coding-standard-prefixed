<?php

declare (strict_types=1);
namespace _PhpScoper49c742f5a4ee\PhpParser\ErrorHandler;

use _PhpScoper49c742f5a4ee\PhpParser\Error;
use _PhpScoper49c742f5a4ee\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper49c742f5a4ee\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper49c742f5a4ee\PhpParser\Error $error)
    {
        throw $error;
    }
}
