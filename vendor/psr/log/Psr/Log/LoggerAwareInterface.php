<?php

namespace _PhpScoperc233426b15e0\Psr\Log;

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
    public function setLogger(\_PhpScoperc233426b15e0\Psr\Log\LoggerInterface $logger);
}
