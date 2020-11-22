<?php

namespace _PhpScoper5ade29b97028\Psr\Log;

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
    public function setLogger(\_PhpScoper5ade29b97028\Psr\Log\LoggerInterface $logger);
}
