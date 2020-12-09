<?php

declare (strict_types=1);
namespace _PhpScoper31ba553edf97\PhpParser\ErrorHandler;

use _PhpScoper31ba553edf97\PhpParser\Error;
use _PhpScoper31ba553edf97\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper31ba553edf97\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper31ba553edf97\PhpParser\Error $error)
    {
        throw $error;
    }
}
