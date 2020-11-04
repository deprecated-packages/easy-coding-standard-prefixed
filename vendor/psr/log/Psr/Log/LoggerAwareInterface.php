<?php

namespace _PhpScoper48b5ec5b60cf\Psr\Log;

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
    public function setLogger(\_PhpScoper48b5ec5b60cf\Psr\Log\LoggerInterface $logger);
}
