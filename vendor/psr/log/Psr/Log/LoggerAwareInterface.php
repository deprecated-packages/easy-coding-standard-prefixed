<?php

namespace _PhpScoperf5f75c22067b\Psr\Log;

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
    public function setLogger(\_PhpScoperf5f75c22067b\Psr\Log\LoggerInterface $logger);
}
