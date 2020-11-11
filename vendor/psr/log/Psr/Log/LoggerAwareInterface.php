<?php

namespace _PhpScoper0f5cd390c37a\Psr\Log;

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
    public function setLogger(\_PhpScoper0f5cd390c37a\Psr\Log\LoggerInterface $logger);
}
