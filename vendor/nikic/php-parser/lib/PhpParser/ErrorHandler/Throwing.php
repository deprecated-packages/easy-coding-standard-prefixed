<?php

declare (strict_types=1);
namespace _PhpScoper833c56a97273\PhpParser\ErrorHandler;

use _PhpScoper833c56a97273\PhpParser\Error;
use _PhpScoper833c56a97273\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper833c56a97273\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper833c56a97273\PhpParser\Error $error)
    {
        throw $error;
    }
}
