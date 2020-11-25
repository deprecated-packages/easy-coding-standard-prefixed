<?php

declare (strict_types=1);
namespace _PhpScoperca8ca183ac38\PhpParser\ErrorHandler;

use _PhpScoperca8ca183ac38\PhpParser\Error;
use _PhpScoperca8ca183ac38\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperca8ca183ac38\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperca8ca183ac38\PhpParser\Error $error)
    {
        throw $error;
    }
}
