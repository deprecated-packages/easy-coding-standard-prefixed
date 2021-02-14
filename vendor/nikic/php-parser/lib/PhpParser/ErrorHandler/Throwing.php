<?php

declare (strict_types=1);
namespace _PhpScoperf361a7d70552\PhpParser\ErrorHandler;

use _PhpScoperf361a7d70552\PhpParser\Error;
use _PhpScoperf361a7d70552\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperf361a7d70552\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperf361a7d70552\PhpParser\Error $error)
    {
        throw $error;
    }
}
