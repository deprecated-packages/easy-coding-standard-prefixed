<?php

declare (strict_types=1);
namespace _PhpScoper839420027581\PhpParser\ErrorHandler;

use _PhpScoper839420027581\PhpParser\Error;
use _PhpScoper839420027581\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper839420027581\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper839420027581\PhpParser\Error $error)
    {
        throw $error;
    }
}
