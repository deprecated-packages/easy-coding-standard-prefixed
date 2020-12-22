<?php

declare (strict_types=1);
namespace _PhpScoper68a3a2539032\PhpParser\ErrorHandler;

use _PhpScoper68a3a2539032\PhpParser\Error;
use _PhpScoper68a3a2539032\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper68a3a2539032\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper68a3a2539032\PhpParser\Error $error)
    {
        throw $error;
    }
}
