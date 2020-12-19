<?php

declare (strict_types=1);
namespace _PhpScoper9f8d5dcff860\PhpParser\ErrorHandler;

use _PhpScoper9f8d5dcff860\PhpParser\Error;
use _PhpScoper9f8d5dcff860\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper9f8d5dcff860\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper9f8d5dcff860\PhpParser\Error $error)
    {
        throw $error;
    }
}
