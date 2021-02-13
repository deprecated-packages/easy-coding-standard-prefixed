<?php

declare (strict_types=1);
namespace _PhpScoper3f3a54dd086f\PhpParser\ErrorHandler;

use _PhpScoper3f3a54dd086f\PhpParser\Error;
use _PhpScoper3f3a54dd086f\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper3f3a54dd086f\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper3f3a54dd086f\PhpParser\Error $error)
    {
        throw $error;
    }
}
