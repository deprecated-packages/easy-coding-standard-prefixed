<?php

declare (strict_types=1);
namespace _PhpScoperf53473b45c36\PhpParser\ErrorHandler;

use _PhpScoperf53473b45c36\PhpParser\Error;
use _PhpScoperf53473b45c36\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperf53473b45c36\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperf53473b45c36\PhpParser\Error $error)
    {
        throw $error;
    }
}
