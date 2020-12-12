<?php

declare (strict_types=1);
namespace _PhpScoper04022cd986ec\PhpParser\ErrorHandler;

use _PhpScoper04022cd986ec\PhpParser\Error;
use _PhpScoper04022cd986ec\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper04022cd986ec\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper04022cd986ec\PhpParser\Error $error)
    {
        throw $error;
    }
}
