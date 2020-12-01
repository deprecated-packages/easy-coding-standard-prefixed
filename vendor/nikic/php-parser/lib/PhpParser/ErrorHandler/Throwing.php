<?php

declare (strict_types=1);
namespace _PhpScoperad68e34a80c5\PhpParser\ErrorHandler;

use _PhpScoperad68e34a80c5\PhpParser\Error;
use _PhpScoperad68e34a80c5\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperad68e34a80c5\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperad68e34a80c5\PhpParser\Error $error)
    {
        throw $error;
    }
}
