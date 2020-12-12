<?php

declare (strict_types=1);
namespace _PhpScoperdaf95aff095b\PhpParser\ErrorHandler;

use _PhpScoperdaf95aff095b\PhpParser\Error;
use _PhpScoperdaf95aff095b\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperdaf95aff095b\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperdaf95aff095b\PhpParser\Error $error)
    {
        throw $error;
    }
}
