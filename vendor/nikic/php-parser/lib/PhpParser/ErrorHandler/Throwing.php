<?php

declare (strict_types=1);
namespace _PhpScoper4e47e3b12394\PhpParser\ErrorHandler;

use _PhpScoper4e47e3b12394\PhpParser\Error;
use _PhpScoper4e47e3b12394\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper4e47e3b12394\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper4e47e3b12394\PhpParser\Error $error)
    {
        throw $error;
    }
}
