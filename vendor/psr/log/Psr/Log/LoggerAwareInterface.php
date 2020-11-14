<?php

namespace _PhpScoper229e8121cf9f\Psr\Log;

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
    public function setLogger(\_PhpScoper229e8121cf9f\Psr\Log\LoggerInterface $logger);
}
