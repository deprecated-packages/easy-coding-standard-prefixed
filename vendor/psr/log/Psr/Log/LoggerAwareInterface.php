<?php

namespace _PhpScoper80dbed43490f\Psr\Log;

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
    public function setLogger(\_PhpScoper80dbed43490f\Psr\Log\LoggerInterface $logger);
}
