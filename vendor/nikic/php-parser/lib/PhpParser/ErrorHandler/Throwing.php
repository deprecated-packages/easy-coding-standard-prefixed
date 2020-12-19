<?php

declare (strict_types=1);
namespace _PhpScoper8b97b0dd6f5b\PhpParser\ErrorHandler;

use _PhpScoper8b97b0dd6f5b\PhpParser\Error;
use _PhpScoper8b97b0dd6f5b\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper8b97b0dd6f5b\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper8b97b0dd6f5b\PhpParser\Error $error)
    {
        throw $error;
    }
}
