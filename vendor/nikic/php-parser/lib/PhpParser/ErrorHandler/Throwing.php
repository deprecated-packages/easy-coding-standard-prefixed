<?php

declare (strict_types=1);
namespace _PhpScoperf053e888b664\PhpParser\ErrorHandler;

use _PhpScoperf053e888b664\PhpParser\Error;
use _PhpScoperf053e888b664\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperf053e888b664\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperf053e888b664\PhpParser\Error $error)
    {
        throw $error;
    }
}
