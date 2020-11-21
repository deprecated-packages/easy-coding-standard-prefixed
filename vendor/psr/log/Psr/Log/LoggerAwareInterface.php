<?php

namespace _PhpScoper224ae0b86670\Psr\Log;

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
    public function setLogger(\_PhpScoper224ae0b86670\Psr\Log\LoggerInterface $logger);
}
