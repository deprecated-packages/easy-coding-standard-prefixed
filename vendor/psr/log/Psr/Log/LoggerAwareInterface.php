<?php

namespace _PhpScoper83b3b9a317c0\Psr\Log;

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
    public function setLogger(\_PhpScoper83b3b9a317c0\Psr\Log\LoggerInterface $logger);
}
