<?php

namespace _PhpScopercae980ebf12d\Psr\Log;

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
    public function setLogger(\_PhpScopercae980ebf12d\Psr\Log\LoggerInterface $logger);
}
