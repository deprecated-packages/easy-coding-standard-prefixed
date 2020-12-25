<?php

declare (strict_types=1);
namespace _PhpScoper64ca614e27fd\PhpParser\ErrorHandler;

use _PhpScoper64ca614e27fd\PhpParser\Error;
use _PhpScoper64ca614e27fd\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper64ca614e27fd\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper64ca614e27fd\PhpParser\Error $error)
    {
        throw $error;
    }
}
