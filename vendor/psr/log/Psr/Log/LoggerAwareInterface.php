<?php

namespace _PhpScoper28ab463fc3ba\Psr\Log;

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
    public function setLogger(\_PhpScoper28ab463fc3ba\Psr\Log\LoggerInterface $logger);
}
