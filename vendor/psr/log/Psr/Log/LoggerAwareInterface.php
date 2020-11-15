<?php

namespace _PhpScopercb576ca159b5\Psr\Log;

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
    public function setLogger(\_PhpScopercb576ca159b5\Psr\Log\LoggerInterface $logger);
}
