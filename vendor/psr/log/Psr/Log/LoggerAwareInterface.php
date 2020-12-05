<?php

namespace _PhpScoperbaf90856897c\Psr\Log;

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
    public function setLogger(\_PhpScoperbaf90856897c\Psr\Log\LoggerInterface $logger);
}
