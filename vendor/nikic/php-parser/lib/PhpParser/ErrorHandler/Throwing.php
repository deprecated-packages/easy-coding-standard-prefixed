<?php

declare (strict_types=1);
namespace _PhpScoperb44a315fec16\PhpParser\ErrorHandler;

use _PhpScoperb44a315fec16\PhpParser\Error;
use _PhpScoperb44a315fec16\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperb44a315fec16\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperb44a315fec16\PhpParser\Error $error)
    {
        throw $error;
    }
}
