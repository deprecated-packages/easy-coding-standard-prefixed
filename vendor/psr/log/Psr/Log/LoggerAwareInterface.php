<?php

namespace _PhpScoperfabf55fef6b7\Psr\Log;

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
    public function setLogger(\_PhpScoperfabf55fef6b7\Psr\Log\LoggerInterface $logger);
}
