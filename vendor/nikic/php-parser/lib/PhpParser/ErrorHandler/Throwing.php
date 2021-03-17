<?php

declare (strict_types=1);
namespace _PhpScoper0c0702cca4ac\PhpParser\ErrorHandler;

use _PhpScoper0c0702cca4ac\PhpParser\Error;
use _PhpScoper0c0702cca4ac\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper0c0702cca4ac\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper0c0702cca4ac\PhpParser\Error $error)
    {
        throw $error;
    }
}
