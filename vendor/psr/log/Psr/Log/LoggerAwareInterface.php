<?php

namespace _PhpScoper8a05d21c15c9\Psr\Log;

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
    public function setLogger(\_PhpScoper8a05d21c15c9\Psr\Log\LoggerInterface $logger);
}
