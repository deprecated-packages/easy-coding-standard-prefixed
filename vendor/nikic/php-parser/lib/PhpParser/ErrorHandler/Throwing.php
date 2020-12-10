<?php

declare (strict_types=1);
namespace _PhpScoperb458b528613f\PhpParser\ErrorHandler;

use _PhpScoperb458b528613f\PhpParser\Error;
use _PhpScoperb458b528613f\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperb458b528613f\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperb458b528613f\PhpParser\Error $error)
    {
        throw $error;
    }
}
