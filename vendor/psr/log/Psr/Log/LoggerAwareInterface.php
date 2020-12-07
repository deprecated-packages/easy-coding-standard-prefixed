<?php

namespace _PhpScoper89ec3c69e67d\Psr\Log;

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
    public function setLogger(\_PhpScoper89ec3c69e67d\Psr\Log\LoggerInterface $logger);
}
