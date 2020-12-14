<?php

namespace _PhpScoper8a0112f19f39\Psr\Log;

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
    public function setLogger(\_PhpScoper8a0112f19f39\Psr\Log\LoggerInterface $logger);
}
