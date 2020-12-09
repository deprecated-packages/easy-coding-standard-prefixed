<?php

namespace _PhpScoperf65af7a6d9a0\Psr\Log;

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
    public function setLogger(\_PhpScoperf65af7a6d9a0\Psr\Log\LoggerInterface $logger);
}
