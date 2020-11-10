<?php

declare (strict_types=1);
namespace _PhpScoper470d6df94ac0\PhpParser\ErrorHandler;

use _PhpScoper470d6df94ac0\PhpParser\Error;
use _PhpScoper470d6df94ac0\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper470d6df94ac0\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper470d6df94ac0\PhpParser\Error $error)
    {
        throw $error;
    }
}
