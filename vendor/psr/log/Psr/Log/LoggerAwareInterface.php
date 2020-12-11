<?php

namespace _PhpScopera061b8a47e36\Psr\Log;

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
    public function setLogger(\_PhpScopera061b8a47e36\Psr\Log\LoggerInterface $logger);
}
