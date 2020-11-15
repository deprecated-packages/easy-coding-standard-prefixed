<?php

declare (strict_types=1);
namespace _PhpScoper70072c07b02b\PhpParser\ErrorHandler;

use _PhpScoper70072c07b02b\PhpParser\Error;
use _PhpScoper70072c07b02b\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper70072c07b02b\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper70072c07b02b\PhpParser\Error $error)
    {
        throw $error;
    }
}
