<?php

namespace _PhpScoper0270f1d35181\Psr\Log;

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
    public function setLogger(\_PhpScoper0270f1d35181\Psr\Log\LoggerInterface $logger);
}
