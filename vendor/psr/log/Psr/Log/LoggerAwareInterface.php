<?php

namespace _PhpScoperdc8fbcd7c69d\Psr\Log;

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
    public function setLogger(\_PhpScoperdc8fbcd7c69d\Psr\Log\LoggerInterface $logger);
}
