<?php

declare (strict_types=1);
namespace _PhpScoperdc8fbcd7c69d\PhpParser\ErrorHandler;

use _PhpScoperdc8fbcd7c69d\PhpParser\Error;
use _PhpScoperdc8fbcd7c69d\PhpParser\ErrorHandler;
/**
 * Error handler that collects all errors into an array.
 *
 * This allows graceful handling of errors.
 */
class Collecting implements \_PhpScoperdc8fbcd7c69d\PhpParser\ErrorHandler
{
    /** @var Error[] Collected errors */
    private $errors = [];
    public function handleError(\_PhpScoperdc8fbcd7c69d\PhpParser\Error $error)
    {
        $this->errors[] = $error;
    }
    /**
     * Get collected errors.
     *
     * @return Error[]
     */
    public function getErrors() : array
    {
        return $this->errors;
    }
    /**
     * Check whether there are any errors.
     *
     * @return bool
     */
    public function hasErrors() : bool
    {
        return !empty($this->errors);
    }
    /**
     * Reset/clear collected errors.
     */
    public function clearErrors()
    {
        $this->errors = [];
    }
}
