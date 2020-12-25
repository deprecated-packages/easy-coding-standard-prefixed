<?php

namespace _PhpScoper745103eaabcd\Psr\Log;

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
    public function setLogger(\_PhpScoper745103eaabcd\Psr\Log\LoggerInterface $logger);
}
