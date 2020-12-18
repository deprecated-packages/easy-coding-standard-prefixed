<?php

declare (strict_types=1);
namespace _PhpScoper4d3fa30a680b\PhpParser\ErrorHandler;

use _PhpScoper4d3fa30a680b\PhpParser\Error;
use _PhpScoper4d3fa30a680b\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper4d3fa30a680b\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper4d3fa30a680b\PhpParser\Error $error)
    {
        throw $error;
    }
}
