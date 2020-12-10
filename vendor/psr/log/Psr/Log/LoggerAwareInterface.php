<?php

namespace _PhpScoper58a0a169dcfb\Psr\Log;

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
    public function setLogger(\_PhpScoper58a0a169dcfb\Psr\Log\LoggerInterface $logger);
}
