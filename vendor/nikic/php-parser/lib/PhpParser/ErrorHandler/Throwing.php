<?php

declare (strict_types=1);
namespace _PhpScoperb36402634947\PhpParser\ErrorHandler;

use _PhpScoperb36402634947\PhpParser\Error;
use _PhpScoperb36402634947\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperb36402634947\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperb36402634947\PhpParser\Error $error)
    {
        throw $error;
    }
}
