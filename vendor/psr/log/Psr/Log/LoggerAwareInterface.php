<?php

namespace _PhpScoper75713bc3e278\Psr\Log;

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
    public function setLogger(\_PhpScoper75713bc3e278\Psr\Log\LoggerInterface $logger);
}
