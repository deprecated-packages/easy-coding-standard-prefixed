<?php

namespace _PhpScopera6f918786d5c\Psr\Log;

/**
 * Describes a logger-aware instance
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object
     *
     * @param LoggerInterface $logger
     * @return null
     */
    public function setLogger(\_PhpScopera6f918786d5c\Psr\Log\LoggerInterface $logger);
}
