<?php

declare (strict_types=1);
namespace _PhpScoper614deab2c612\PhpParser\ErrorHandler;

use _PhpScoper614deab2c612\PhpParser\Error;
use _PhpScoper614deab2c612\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper614deab2c612\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper614deab2c612\PhpParser\Error $error)
    {
        throw $error;
    }
}
