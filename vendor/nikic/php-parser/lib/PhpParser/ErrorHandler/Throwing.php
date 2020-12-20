<?php

declare (strict_types=1);
namespace _PhpScoperab9510cd5d97\PhpParser\ErrorHandler;

use _PhpScoperab9510cd5d97\PhpParser\Error;
use _PhpScoperab9510cd5d97\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperab9510cd5d97\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperab9510cd5d97\PhpParser\Error $error)
    {
        throw $error;
    }
}
