<?php

declare (strict_types=1);
namespace _PhpScoperfd70a7e8e84f\PhpParser\ErrorHandler;

use _PhpScoperfd70a7e8e84f\PhpParser\Error;
use _PhpScoperfd70a7e8e84f\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperfd70a7e8e84f\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperfd70a7e8e84f\PhpParser\Error $error)
    {
        throw $error;
    }
}
