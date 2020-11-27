<?php

namespace _PhpScoper578a67c80b2b\Psr\Log;

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
    public function setLogger(\_PhpScoper578a67c80b2b\Psr\Log\LoggerInterface $logger);
}
