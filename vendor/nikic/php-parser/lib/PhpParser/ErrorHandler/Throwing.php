<?php

declare (strict_types=1);
namespace _PhpScoperf3db63c305b2\PhpParser\ErrorHandler;

use _PhpScoperf3db63c305b2\PhpParser\Error;
use _PhpScoperf3db63c305b2\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperf3db63c305b2\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperf3db63c305b2\PhpParser\Error $error)
    {
        throw $error;
    }
}
