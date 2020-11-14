<?php

namespace _PhpScoperecb978830f1e\Psr\Log;

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
    public function setLogger(\_PhpScoperecb978830f1e\Psr\Log\LoggerInterface $logger);
}
