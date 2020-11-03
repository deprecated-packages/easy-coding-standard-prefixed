<?php

declare (strict_types=1);
namespace _PhpScoperaad82bb90a86\PhpParser\ErrorHandler;

use _PhpScoperaad82bb90a86\PhpParser\Error;
use _PhpScoperaad82bb90a86\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperaad82bb90a86\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperaad82bb90a86\PhpParser\Error $error)
    {
        throw $error;
    }
}
