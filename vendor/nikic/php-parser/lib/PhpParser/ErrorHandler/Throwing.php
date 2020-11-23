<?php

declare (strict_types=1);
namespace _PhpScoperd4c5032f0671\PhpParser\ErrorHandler;

use _PhpScoperd4c5032f0671\PhpParser\Error;
use _PhpScoperd4c5032f0671\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperd4c5032f0671\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperd4c5032f0671\PhpParser\Error $error)
    {
        throw $error;
    }
}
