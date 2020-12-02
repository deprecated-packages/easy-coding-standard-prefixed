<?php

namespace _PhpScopera23ebff5477f\Psr\Log;

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
    public function setLogger(\_PhpScopera23ebff5477f\Psr\Log\LoggerInterface $logger);
}
