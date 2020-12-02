<?php

declare (strict_types=1);
namespace _PhpScoperfaaf57618f34\PhpParser\ErrorHandler;

use _PhpScoperfaaf57618f34\PhpParser\Error;
use _PhpScoperfaaf57618f34\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperfaaf57618f34\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperfaaf57618f34\PhpParser\Error $error)
    {
        throw $error;
    }
}
