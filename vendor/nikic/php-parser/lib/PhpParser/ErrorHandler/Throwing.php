<?php

declare (strict_types=1);
namespace _PhpScoper1103e00fb46b\PhpParser\ErrorHandler;

use _PhpScoper1103e00fb46b\PhpParser\Error;
use _PhpScoper1103e00fb46b\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper1103e00fb46b\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper1103e00fb46b\PhpParser\Error $error)
    {
        throw $error;
    }
}
