<?php

namespace _PhpScoperd9fcac9e904f\Psr\Log;

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
    public function setLogger(\_PhpScoperd9fcac9e904f\Psr\Log\LoggerInterface $logger);
}
