<?php

declare (strict_types=1);
namespace _PhpScoperbc5235eb86f3\PhpParser\ErrorHandler;

use _PhpScoperbc5235eb86f3\PhpParser\Error;
use _PhpScoperbc5235eb86f3\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperbc5235eb86f3\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperbc5235eb86f3\PhpParser\Error $error)
    {
        throw $error;
    }
}
