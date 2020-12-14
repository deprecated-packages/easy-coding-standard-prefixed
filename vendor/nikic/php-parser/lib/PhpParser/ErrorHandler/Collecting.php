<?php

declare (strict_types=1);
namespace _PhpScoperc64a4ac1af35\PhpParser\ErrorHandler;

use _PhpScoperc64a4ac1af35\PhpParser\Error;
use _PhpScoperc64a4ac1af35\PhpParser\ErrorHandler;
/**
 * Error handler that collects all errors into an array.
 *
 * This allows graceful handling of errors.
 */
class Collecting implements \_PhpScoperc64a4ac1af35\PhpParser\ErrorHandler
{
    /** @var Error[] Collected errors */
    private $errors = [];
    public function handleError(\_PhpScoperc64a4ac1af35\PhpParser\Error $error)
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
