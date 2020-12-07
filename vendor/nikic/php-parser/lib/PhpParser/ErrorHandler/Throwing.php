<?php

declare (strict_types=1);
namespace _PhpScoperda2604e33acb\PhpParser\ErrorHandler;

use _PhpScoperda2604e33acb\PhpParser\Error;
use _PhpScoperda2604e33acb\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperda2604e33acb\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperda2604e33acb\PhpParser\Error $error)
    {
        throw $error;
    }
}
