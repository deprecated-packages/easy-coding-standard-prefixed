<?php

namespace _PhpScoper992f4af8b9e0\Psr\Log;

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
    public function setLogger(\_PhpScoper992f4af8b9e0\Psr\Log\LoggerInterface $logger);
}
