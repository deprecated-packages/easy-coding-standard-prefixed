<?php

declare (strict_types=1);
namespace _PhpScoperb73f9e44f4eb\PhpParser\ErrorHandler;

use _PhpScoperb73f9e44f4eb\PhpParser\Error;
use _PhpScoperb73f9e44f4eb\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperb73f9e44f4eb\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperb73f9e44f4eb\PhpParser\Error $error)
    {
        throw $error;
    }
}
