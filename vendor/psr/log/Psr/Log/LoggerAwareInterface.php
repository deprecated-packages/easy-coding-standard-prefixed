<?php

namespace _PhpScoperdf6a0b341030\Psr\Log;

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
    public function setLogger(\_PhpScoperdf6a0b341030\Psr\Log\LoggerInterface $logger);
}
