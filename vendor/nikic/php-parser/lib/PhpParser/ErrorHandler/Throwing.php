<?php

declare (strict_types=1);
namespace _PhpScoperc75fd40d7a6e\PhpParser\ErrorHandler;

use _PhpScoperc75fd40d7a6e\PhpParser\Error;
use _PhpScoperc75fd40d7a6e\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperc75fd40d7a6e\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperc75fd40d7a6e\PhpParser\Error $error)
    {
        throw $error;
    }
}
