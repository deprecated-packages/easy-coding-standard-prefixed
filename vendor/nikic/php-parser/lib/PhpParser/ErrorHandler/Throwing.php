<?php

declare (strict_types=1);
namespace _PhpScoper2fe14d6302bc\PhpParser\ErrorHandler;

use _PhpScoper2fe14d6302bc\PhpParser\Error;
use _PhpScoper2fe14d6302bc\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper2fe14d6302bc\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper2fe14d6302bc\PhpParser\Error $error)
    {
        throw $error;
    }
}
