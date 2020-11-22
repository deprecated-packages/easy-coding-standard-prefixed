<?php

declare (strict_types=1);
namespace _PhpScoperac4e86be08e5\PhpParser\ErrorHandler;

use _PhpScoperac4e86be08e5\PhpParser\Error;
use _PhpScoperac4e86be08e5\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperac4e86be08e5\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperac4e86be08e5\PhpParser\Error $error)
    {
        throw $error;
    }
}
