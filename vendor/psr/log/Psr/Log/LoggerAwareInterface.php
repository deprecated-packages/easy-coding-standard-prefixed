<?php

namespace _PhpScopera9d6b451df71\Psr\Log;

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
    public function setLogger(\_PhpScopera9d6b451df71\Psr\Log\LoggerInterface $logger);
}
