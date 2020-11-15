<?php

declare (strict_types=1);
namespace _PhpScoper279cf54b77ad\PhpParser\ErrorHandler;

use _PhpScoper279cf54b77ad\PhpParser\Error;
use _PhpScoper279cf54b77ad\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper279cf54b77ad\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper279cf54b77ad\PhpParser\Error $error)
    {
        throw $error;
    }
}
