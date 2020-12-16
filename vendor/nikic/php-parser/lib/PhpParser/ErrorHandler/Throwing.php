<?php

declare (strict_types=1);
namespace _PhpScoperb6a8e65b492c\PhpParser\ErrorHandler;

use _PhpScoperb6a8e65b492c\PhpParser\Error;
use _PhpScoperb6a8e65b492c\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperb6a8e65b492c\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperb6a8e65b492c\PhpParser\Error $error)
    {
        throw $error;
    }
}
