<?php

declare (strict_types=1);
namespace _PhpScoper37a255897161\PhpParser\ErrorHandler;

use _PhpScoper37a255897161\PhpParser\Error;
use _PhpScoper37a255897161\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper37a255897161\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper37a255897161\PhpParser\Error $error)
    {
        throw $error;
    }
}
