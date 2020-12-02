<?php

namespace _PhpScoperf62d28230928\Psr\Log;

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
    public function setLogger(\_PhpScoperf62d28230928\Psr\Log\LoggerInterface $logger);
}
