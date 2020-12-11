<?php

declare (strict_types=1);
namespace _PhpScoperb26833cc184d\PhpParser\ErrorHandler;

use _PhpScoperb26833cc184d\PhpParser\Error;
use _PhpScoperb26833cc184d\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperb26833cc184d\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperb26833cc184d\PhpParser\Error $error)
    {
        throw $error;
    }
}
