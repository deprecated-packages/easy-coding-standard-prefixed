<?php

declare (strict_types=1);
namespace _PhpScoper18bd934c069f\PhpParser\ErrorHandler;

use _PhpScoper18bd934c069f\PhpParser\Error;
use _PhpScoper18bd934c069f\PhpParser\ErrorHandler;
/**
 * Error handler that collects all errors into an array.
 *
 * This allows graceful handling of errors.
 */
class Collecting implements \_PhpScoper18bd934c069f\PhpParser\ErrorHandler
{
    /** @var Error[] Collected errors */
    private $errors = [];
    public function handleError(\_PhpScoper18bd934c069f\PhpParser\Error $error)
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
