<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\PhpParser\ErrorHandler;

use _PhpScoperddde3ba4aebc\PhpParser\Error;
use _PhpScoperddde3ba4aebc\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperddde3ba4aebc\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperddde3ba4aebc\PhpParser\Error $error)
    {
        throw $error;
    }
}
