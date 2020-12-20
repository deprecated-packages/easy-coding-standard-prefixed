<?php

declare (strict_types=1);
namespace _PhpScoperba24099fc6fd\PhpParser\ErrorHandler;

use _PhpScoperba24099fc6fd\PhpParser\Error;
use _PhpScoperba24099fc6fd\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperba24099fc6fd\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperba24099fc6fd\PhpParser\Error $error)
    {
        throw $error;
    }
}
