<?php

namespace _PhpScopera40fc53e636b\Psr\Log;

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
    public function setLogger(\_PhpScopera40fc53e636b\Psr\Log\LoggerInterface $logger);
}
