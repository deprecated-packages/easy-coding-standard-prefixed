<?php

namespace _PhpScoper6a1dd9b8a650\Psr\Log;

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
    public function setLogger(\_PhpScoper6a1dd9b8a650\Psr\Log\LoggerInterface $logger);
}
