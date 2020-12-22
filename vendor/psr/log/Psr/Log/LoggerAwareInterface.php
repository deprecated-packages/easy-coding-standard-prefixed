<?php

namespace _PhpScoper57272265e1c9\Psr\Log;

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
    public function setLogger(\_PhpScoper57272265e1c9\Psr\Log\LoggerInterface $logger);
}
