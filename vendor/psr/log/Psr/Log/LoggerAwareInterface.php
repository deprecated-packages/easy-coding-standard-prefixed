<?php

namespace _PhpScoper21c6ce8bfe5d\Psr\Log;

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
    public function setLogger(\_PhpScoper21c6ce8bfe5d\Psr\Log\LoggerInterface $logger);
}
