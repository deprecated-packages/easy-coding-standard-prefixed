<?php

namespace _PhpScoper02b5d1bf8fec\Psr\Log;

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
    public function setLogger(\_PhpScoper02b5d1bf8fec\Psr\Log\LoggerInterface $logger);
}
