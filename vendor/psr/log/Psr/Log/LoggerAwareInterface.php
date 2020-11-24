<?php

namespace _PhpScoper7108c819f5c5\Psr\Log;

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
    public function setLogger(\_PhpScoper7108c819f5c5\Psr\Log\LoggerInterface $logger);
}
