<?php

namespace _PhpScopera238de2e9b5a\Psr\Log;

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
    public function setLogger(\_PhpScopera238de2e9b5a\Psr\Log\LoggerInterface $logger);
}
