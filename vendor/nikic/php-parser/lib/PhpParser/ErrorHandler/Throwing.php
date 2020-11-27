<?php

declare (strict_types=1);
namespace _PhpScoper08748c77fa1c\PhpParser\ErrorHandler;

use _PhpScoper08748c77fa1c\PhpParser\Error;
use _PhpScoper08748c77fa1c\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper08748c77fa1c\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper08748c77fa1c\PhpParser\Error $error)
    {
        throw $error;
    }
}
