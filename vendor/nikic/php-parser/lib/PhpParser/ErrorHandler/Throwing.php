<?php

declare (strict_types=1);
namespace _PhpScoperef870243cfdb\PhpParser\ErrorHandler;

use _PhpScoperef870243cfdb\PhpParser\Error;
use _PhpScoperef870243cfdb\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperef870243cfdb\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperef870243cfdb\PhpParser\Error $error)
    {
        throw $error;
    }
}
