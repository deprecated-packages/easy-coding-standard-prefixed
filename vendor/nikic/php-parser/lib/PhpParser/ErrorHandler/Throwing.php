<?php

declare (strict_types=1);
namespace _PhpScoperc4b135661b3a\PhpParser\ErrorHandler;

use _PhpScoperc4b135661b3a\PhpParser\Error;
use _PhpScoperc4b135661b3a\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperc4b135661b3a\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperc4b135661b3a\PhpParser\Error $error)
    {
        throw $error;
    }
}
