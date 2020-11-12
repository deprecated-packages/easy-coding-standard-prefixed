<?php

declare (strict_types=1);
namespace _PhpScoper3d6b50c3ca2f\PhpParser\ErrorHandler;

use _PhpScoper3d6b50c3ca2f\PhpParser\Error;
use _PhpScoper3d6b50c3ca2f\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper3d6b50c3ca2f\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper3d6b50c3ca2f\PhpParser\Error $error)
    {
        throw $error;
    }
}
