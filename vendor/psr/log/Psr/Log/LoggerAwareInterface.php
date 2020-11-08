<?php

namespace _PhpScoper190659c42b56\Psr\Log;

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
    public function setLogger(\_PhpScoper190659c42b56\Psr\Log\LoggerInterface $logger);
}
