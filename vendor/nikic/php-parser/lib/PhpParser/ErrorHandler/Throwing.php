<?php

declare (strict_types=1);
namespace _PhpScoperf3dc21757def\PhpParser\ErrorHandler;

use _PhpScoperf3dc21757def\PhpParser\Error;
use _PhpScoperf3dc21757def\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperf3dc21757def\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperf3dc21757def\PhpParser\Error $error)
    {
        throw $error;
    }
}
