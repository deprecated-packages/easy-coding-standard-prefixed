<?php

namespace _PhpScopera51a90153f58\Psr\Log;

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
    public function setLogger(\_PhpScopera51a90153f58\Psr\Log\LoggerInterface $logger);
}
