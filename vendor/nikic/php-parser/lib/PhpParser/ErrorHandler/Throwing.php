<?php

declare (strict_types=1);
namespace _PhpScoper17bb67c99ade\PhpParser\ErrorHandler;

use _PhpScoper17bb67c99ade\PhpParser\Error;
use _PhpScoper17bb67c99ade\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper17bb67c99ade\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper17bb67c99ade\PhpParser\Error $error)
    {
        throw $error;
    }
}
