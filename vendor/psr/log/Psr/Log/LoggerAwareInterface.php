<?php

namespace _PhpScoperfa7254c25e18\Psr\Log;

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
    public function setLogger(\_PhpScoperfa7254c25e18\Psr\Log\LoggerInterface $logger);
}
