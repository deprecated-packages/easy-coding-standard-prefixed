<?php

declare (strict_types=1);
namespace _PhpScoperba5852cc6147\PhpParser\ErrorHandler;

use _PhpScoperba5852cc6147\PhpParser\Error;
use _PhpScoperba5852cc6147\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperba5852cc6147\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperba5852cc6147\PhpParser\Error $error)
    {
        throw $error;
    }
}
