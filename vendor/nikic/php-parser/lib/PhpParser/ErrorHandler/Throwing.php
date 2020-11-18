<?php

declare (strict_types=1);
namespace _PhpScoperf77bffce0320\PhpParser\ErrorHandler;

use _PhpScoperf77bffce0320\PhpParser\Error;
use _PhpScoperf77bffce0320\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperf77bffce0320\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperf77bffce0320\PhpParser\Error $error)
    {
        throw $error;
    }
}
