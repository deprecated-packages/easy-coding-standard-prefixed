<?php

namespace _PhpScoper5813f9b171f8\Psr\Log;

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
    public function setLogger(\_PhpScoper5813f9b171f8\Psr\Log\LoggerInterface $logger);
}
