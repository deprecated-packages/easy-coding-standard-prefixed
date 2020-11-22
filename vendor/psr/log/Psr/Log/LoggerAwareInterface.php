<?php

namespace _PhpScopera88a8b9f064a\Psr\Log;

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
    public function setLogger(\_PhpScopera88a8b9f064a\Psr\Log\LoggerInterface $logger);
}
