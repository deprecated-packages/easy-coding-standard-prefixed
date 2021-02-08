<?php

declare (strict_types=1);
namespace _PhpScoper326af2119eba\PhpParser\ErrorHandler;

use _PhpScoper326af2119eba\PhpParser\Error;
use _PhpScoper326af2119eba\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper326af2119eba\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper326af2119eba\PhpParser\Error $error)
    {
        throw $error;
    }
}
