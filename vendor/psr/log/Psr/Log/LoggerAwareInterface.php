<?php

namespace _PhpScopere5e7dca8c031\Psr\Log;

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
    public function setLogger(\_PhpScopere5e7dca8c031\Psr\Log\LoggerInterface $logger);
}
