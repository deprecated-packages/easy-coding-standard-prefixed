<?php

namespace _PhpScoperf3d5f0921050\Psr\Log;

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
    public function setLogger(\_PhpScoperf3d5f0921050\Psr\Log\LoggerInterface $logger);
}
