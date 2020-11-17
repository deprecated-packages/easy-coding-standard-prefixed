<?php

namespace _PhpScoper2a8ad010dfbd\Psr\Log;

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
    public function setLogger(\_PhpScoper2a8ad010dfbd\Psr\Log\LoggerInterface $logger);
}
