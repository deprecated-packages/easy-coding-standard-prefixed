<?php

namespace _PhpScoperfd70a7e8e84f\Psr\Log;

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
    public function setLogger(\_PhpScoperfd70a7e8e84f\Psr\Log\LoggerInterface $logger);
}
