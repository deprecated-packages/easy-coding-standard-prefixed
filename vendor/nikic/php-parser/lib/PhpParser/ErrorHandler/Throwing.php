<?php

declare (strict_types=1);
namespace _PhpScoper63567e560066\PhpParser\ErrorHandler;

use _PhpScoper63567e560066\PhpParser\Error;
use _PhpScoper63567e560066\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper63567e560066\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper63567e560066\PhpParser\Error $error)
    {
        throw $error;
    }
}
