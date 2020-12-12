<?php

namespace _PhpScoperbd5c5a045153\Psr\Log;

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
    public function setLogger(\_PhpScoperbd5c5a045153\Psr\Log\LoggerInterface $logger);
}
