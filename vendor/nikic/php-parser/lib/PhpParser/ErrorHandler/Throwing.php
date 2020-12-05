<?php

declare (strict_types=1);
namespace _PhpScoper81b3ff5ab9fe\PhpParser\ErrorHandler;

use _PhpScoper81b3ff5ab9fe\PhpParser\Error;
use _PhpScoper81b3ff5ab9fe\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper81b3ff5ab9fe\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper81b3ff5ab9fe\PhpParser\Error $error)
    {
        throw $error;
    }
}
