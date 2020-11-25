<?php

namespace _PhpScoper38a7d00685f8\Psr\Log;

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
    public function setLogger(\_PhpScoper38a7d00685f8\Psr\Log\LoggerInterface $logger);
}
