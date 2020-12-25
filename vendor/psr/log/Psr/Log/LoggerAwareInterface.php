<?php

namespace _PhpScoper592524ba34f0\Psr\Log;

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
    public function setLogger(\_PhpScoper592524ba34f0\Psr\Log\LoggerInterface $logger);
}
