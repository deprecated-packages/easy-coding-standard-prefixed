<?php

namespace _PhpScopera04bf8e97c06\Psr\Log;

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
    public function setLogger(\_PhpScopera04bf8e97c06\Psr\Log\LoggerInterface $logger);
}
