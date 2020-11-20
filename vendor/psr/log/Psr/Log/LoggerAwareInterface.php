<?php

namespace _PhpScoperb6d4bd368bd9\Psr\Log;

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
    public function setLogger(\_PhpScoperb6d4bd368bd9\Psr\Log\LoggerInterface $logger);
}
