<?php

declare (strict_types=1);
namespace _PhpScoperdf6a0b341030\PhpParser\ErrorHandler;

use _PhpScoperdf6a0b341030\PhpParser\Error;
use _PhpScoperdf6a0b341030\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperdf6a0b341030\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperdf6a0b341030\PhpParser\Error $error)
    {
        throw $error;
    }
}
