<?php

namespace _PhpScoper6a0a7eb6e565\Psr\Log;

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
    public function setLogger(\_PhpScoper6a0a7eb6e565\Psr\Log\LoggerInterface $logger);
}
