<?php

namespace _PhpScoperaad82bb90a86\Psr\Log;

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
    public function setLogger(\_PhpScoperaad82bb90a86\Psr\Log\LoggerInterface $logger);
}
