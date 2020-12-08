<?php

namespace _PhpScoperf3f1be0d8a30\Psr\Log;

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
    public function setLogger(\_PhpScoperf3f1be0d8a30\Psr\Log\LoggerInterface $logger);
}
