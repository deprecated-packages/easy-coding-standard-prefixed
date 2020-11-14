<?php

namespace _PhpScopera749ac204cd2\Psr\Log;

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
    public function setLogger(\_PhpScopera749ac204cd2\Psr\Log\LoggerInterface $logger);
}
