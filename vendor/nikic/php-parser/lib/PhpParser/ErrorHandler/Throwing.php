<?php

declare (strict_types=1);
namespace _PhpScoper96382aaac118\PhpParser\ErrorHandler;

use _PhpScoper96382aaac118\PhpParser\Error;
use _PhpScoper96382aaac118\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper96382aaac118\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper96382aaac118\PhpParser\Error $error)
    {
        throw $error;
    }
}
