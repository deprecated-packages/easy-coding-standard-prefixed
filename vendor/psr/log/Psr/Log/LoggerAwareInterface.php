<?php

namespace _PhpScopera189153e1f79\Psr\Log;

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
    public function setLogger(\_PhpScopera189153e1f79\Psr\Log\LoggerInterface $logger);
}
