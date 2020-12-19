<?php

namespace _PhpScoper065e4ba46e6d\Psr\Log;

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
    public function setLogger(\_PhpScoper065e4ba46e6d\Psr\Log\LoggerInterface $logger);
}
