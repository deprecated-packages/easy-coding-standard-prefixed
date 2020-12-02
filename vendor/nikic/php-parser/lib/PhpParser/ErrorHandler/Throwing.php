<?php

declare (strict_types=1);
namespace _PhpScoperc95ae4bf942a\PhpParser\ErrorHandler;

use _PhpScoperc95ae4bf942a\PhpParser\Error;
use _PhpScoperc95ae4bf942a\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperc95ae4bf942a\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperc95ae4bf942a\PhpParser\Error $error)
    {
        throw $error;
    }
}
