<?php

declare (strict_types=1);
namespace _PhpScoper59da9ac954a6\PhpParser\ErrorHandler;

use _PhpScoper59da9ac954a6\PhpParser\Error;
use _PhpScoper59da9ac954a6\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper59da9ac954a6\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper59da9ac954a6\PhpParser\Error $error)
    {
        throw $error;
    }
}
