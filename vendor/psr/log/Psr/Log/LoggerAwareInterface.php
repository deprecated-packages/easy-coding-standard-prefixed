<?php

namespace _PhpScopera37d6fb0b1ab\Psr\Log;

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
    public function setLogger(\_PhpScopera37d6fb0b1ab\Psr\Log\LoggerInterface $logger);
}
