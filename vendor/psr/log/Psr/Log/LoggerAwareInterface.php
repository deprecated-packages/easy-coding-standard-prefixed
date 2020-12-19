<?php

namespace _PhpScopera8f555a7493c\Psr\Log;

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
    public function setLogger(\_PhpScopera8f555a7493c\Psr\Log\LoggerInterface $logger);
}
