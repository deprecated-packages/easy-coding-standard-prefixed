<?php

declare (strict_types=1);
namespace _PhpScoperf3f1be0d8a30\PhpParser\ErrorHandler;

use _PhpScoperf3f1be0d8a30\PhpParser\Error;
use _PhpScoperf3f1be0d8a30\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperf3f1be0d8a30\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperf3f1be0d8a30\PhpParser\Error $error)
    {
        throw $error;
    }
}
