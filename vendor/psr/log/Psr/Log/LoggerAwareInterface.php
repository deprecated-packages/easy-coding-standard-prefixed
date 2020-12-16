<?php

namespace _PhpScoperd35c27cd4b09\Psr\Log;

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
    public function setLogger(\_PhpScoperd35c27cd4b09\Psr\Log\LoggerInterface $logger);
}
