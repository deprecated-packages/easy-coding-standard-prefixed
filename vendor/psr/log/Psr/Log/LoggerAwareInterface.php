<?php

namespace _PhpScopera48d5dbb002d\Psr\Log;

/**
 * Describes a logger-aware instance.
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object.
     *
     * @param LoggerInterface $logger
     *
     * @return void
     */
    public function setLogger(\_PhpScopera48d5dbb002d\Psr\Log\LoggerInterface $logger);
}
