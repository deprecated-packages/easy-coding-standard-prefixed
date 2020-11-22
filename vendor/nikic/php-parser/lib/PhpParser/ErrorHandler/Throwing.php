<?php

declare (strict_types=1);
namespace _PhpScoperc5bee3a837bb\PhpParser\ErrorHandler;

use _PhpScoperc5bee3a837bb\PhpParser\Error;
use _PhpScoperc5bee3a837bb\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperc5bee3a837bb\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperc5bee3a837bb\PhpParser\Error $error)
    {
        throw $error;
    }
}
