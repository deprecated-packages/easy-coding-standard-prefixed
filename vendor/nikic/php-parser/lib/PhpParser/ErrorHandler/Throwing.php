<?php

declare (strict_types=1);
namespace _PhpScoperc753ccca5a0c\PhpParser\ErrorHandler;

use _PhpScoperc753ccca5a0c\PhpParser\Error;
use _PhpScoperc753ccca5a0c\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperc753ccca5a0c\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperc753ccca5a0c\PhpParser\Error $error)
    {
        throw $error;
    }
}
