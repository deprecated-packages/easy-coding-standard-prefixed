<?php

namespace _PhpScoperf7b66f9e3817\Psr\Log;

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
    public function setLogger(\_PhpScoperf7b66f9e3817\Psr\Log\LoggerInterface $logger);
}
