<?php

declare (strict_types=1);
namespace _PhpScoperc8fea59b0cb1\PhpParser\ErrorHandler;

use _PhpScoperc8fea59b0cb1\PhpParser\Error;
use _PhpScoperc8fea59b0cb1\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperc8fea59b0cb1\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperc8fea59b0cb1\PhpParser\Error $error)
    {
        throw $error;
    }
}
