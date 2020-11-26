<?php

declare (strict_types=1);
namespace _PhpScoper4a718ec9156e\PhpParser\ErrorHandler;

use _PhpScoper4a718ec9156e\PhpParser\Error;
use _PhpScoper4a718ec9156e\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper4a718ec9156e\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper4a718ec9156e\PhpParser\Error $error)
    {
        throw $error;
    }
}
