<?php

namespace _PhpScoper5c006f5f032f\Psr\Log;

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
    public function setLogger(\_PhpScoper5c006f5f032f\Psr\Log\LoggerInterface $logger);
}
