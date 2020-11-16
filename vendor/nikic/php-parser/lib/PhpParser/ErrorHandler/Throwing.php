<?php

declare (strict_types=1);
namespace _PhpScopera9d6b451df71\PhpParser\ErrorHandler;

use _PhpScopera9d6b451df71\PhpParser\Error;
use _PhpScopera9d6b451df71\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopera9d6b451df71\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopera9d6b451df71\PhpParser\Error $error)
    {
        throw $error;
    }
}
