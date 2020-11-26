<?php

namespace _PhpScoperb2e2c0c42e71\Psr\Log;

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
    public function setLogger(\_PhpScoperb2e2c0c42e71\Psr\Log\LoggerInterface $logger);
}
