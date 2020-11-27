<?php

declare (strict_types=1);
namespace _PhpScoper776637f3d3c3\PhpParser\ErrorHandler;

use _PhpScoper776637f3d3c3\PhpParser\Error;
use _PhpScoper776637f3d3c3\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper776637f3d3c3\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper776637f3d3c3\PhpParser\Error $error)
    {
        throw $error;
    }
}
