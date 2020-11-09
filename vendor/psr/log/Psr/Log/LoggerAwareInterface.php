<?php

namespace _PhpScoperae959d396e95\Psr\Log;

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
    public function setLogger(\_PhpScoperae959d396e95\Psr\Log\LoggerInterface $logger);
}
