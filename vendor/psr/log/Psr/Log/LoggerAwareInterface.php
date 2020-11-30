<?php

namespace _PhpScoper246d7c16d32f\Psr\Log;

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
    public function setLogger(\_PhpScoper246d7c16d32f\Psr\Log\LoggerInterface $logger);
}
