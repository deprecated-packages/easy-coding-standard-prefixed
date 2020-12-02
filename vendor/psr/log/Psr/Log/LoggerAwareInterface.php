<?php

namespace _PhpScopera34ae19e8d40\Psr\Log;

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
    public function setLogger(\_PhpScopera34ae19e8d40\Psr\Log\LoggerInterface $logger);
}
