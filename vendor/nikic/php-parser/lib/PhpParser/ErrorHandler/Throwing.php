<?php

declare (strict_types=1);
namespace _PhpScoper797695bcfb1f\PhpParser\ErrorHandler;

use _PhpScoper797695bcfb1f\PhpParser\Error;
use _PhpScoper797695bcfb1f\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper797695bcfb1f\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper797695bcfb1f\PhpParser\Error $error)
    {
        throw $error;
    }
}
