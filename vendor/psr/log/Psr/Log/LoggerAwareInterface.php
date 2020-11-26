<?php

namespace _PhpScopercb217fd4e736\Psr\Log;

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
    public function setLogger(\_PhpScopercb217fd4e736\Psr\Log\LoggerInterface $logger);
}
