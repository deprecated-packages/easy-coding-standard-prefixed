<?php

namespace _PhpScoper7f5523334c1b\Psr\Log;

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
    public function setLogger(\_PhpScoper7f5523334c1b\Psr\Log\LoggerInterface $logger);
}
