<?php

namespace _PhpScoper4936962185e7\Psr\Log;

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
    public function setLogger(\_PhpScoper4936962185e7\Psr\Log\LoggerInterface $logger);
}
