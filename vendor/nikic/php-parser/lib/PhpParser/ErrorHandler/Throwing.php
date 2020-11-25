<?php

declare (strict_types=1);
namespace _PhpScoper418afc2f157c\PhpParser\ErrorHandler;

use _PhpScoper418afc2f157c\PhpParser\Error;
use _PhpScoper418afc2f157c\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper418afc2f157c\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper418afc2f157c\PhpParser\Error $error)
    {
        throw $error;
    }
}
