<?php

declare (strict_types=1);
namespace _PhpScopereb8678af2407\PhpParser\ErrorHandler;

use _PhpScopereb8678af2407\PhpParser\Error;
use _PhpScopereb8678af2407\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopereb8678af2407\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopereb8678af2407\PhpParser\Error $error)
    {
        throw $error;
    }
}
