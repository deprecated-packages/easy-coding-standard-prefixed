<?php

namespace _PhpScoperf77bffce0320\Psr\Log;

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
    public function setLogger(\_PhpScoperf77bffce0320\Psr\Log\LoggerInterface $logger);
}
