<?php

declare (strict_types=1);
namespace _PhpScoper3e8786a75afe\PhpParser\ErrorHandler;

use _PhpScoper3e8786a75afe\PhpParser\Error;
use _PhpScoper3e8786a75afe\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper3e8786a75afe\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper3e8786a75afe\PhpParser\Error $error)
    {
        throw $error;
    }
}
