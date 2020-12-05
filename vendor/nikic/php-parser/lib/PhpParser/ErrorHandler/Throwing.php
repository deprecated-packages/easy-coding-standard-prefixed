<?php

declare (strict_types=1);
namespace _PhpScoper87c77ad5700d\PhpParser\ErrorHandler;

use _PhpScoper87c77ad5700d\PhpParser\Error;
use _PhpScoper87c77ad5700d\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper87c77ad5700d\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper87c77ad5700d\PhpParser\Error $error)
    {
        throw $error;
    }
}
