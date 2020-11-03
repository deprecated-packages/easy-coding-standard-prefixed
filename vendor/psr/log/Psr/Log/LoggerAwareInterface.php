<?php

namespace _PhpScoper61bdb485188f\Psr\Log;

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
    public function setLogger(\_PhpScoper61bdb485188f\Psr\Log\LoggerInterface $logger);
}
