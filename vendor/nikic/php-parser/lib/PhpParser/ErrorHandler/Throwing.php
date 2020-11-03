<?php

declare (strict_types=1);
namespace _PhpScoper5928e324b45e\PhpParser\ErrorHandler;

use _PhpScoper5928e324b45e\PhpParser\Error;
use _PhpScoper5928e324b45e\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper5928e324b45e\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper5928e324b45e\PhpParser\Error $error)
    {
        throw $error;
    }
}
