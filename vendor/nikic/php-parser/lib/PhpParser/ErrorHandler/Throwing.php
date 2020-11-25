<?php

declare (strict_types=1);
namespace _PhpScoperaac5f7c652e4\PhpParser\ErrorHandler;

use _PhpScoperaac5f7c652e4\PhpParser\Error;
use _PhpScoperaac5f7c652e4\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperaac5f7c652e4\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperaac5f7c652e4\PhpParser\Error $error)
    {
        throw $error;
    }
}
