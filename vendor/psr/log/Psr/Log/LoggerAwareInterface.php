<?php

namespace _PhpScoperbd5fb781fe24\Psr\Log;

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
    public function setLogger(\_PhpScoperbd5fb781fe24\Psr\Log\LoggerInterface $logger);
}
