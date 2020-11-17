<?php

namespace _PhpScoperad4b7e2c09d8\Psr\Log;

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
    public function setLogger(\_PhpScoperad4b7e2c09d8\Psr\Log\LoggerInterface $logger);
}
