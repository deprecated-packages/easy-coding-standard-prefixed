<?php

namespace _PhpScoperfab1bfb7ec99\Psr\Log;

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
    public function setLogger(\_PhpScoperfab1bfb7ec99\Psr\Log\LoggerInterface $logger);
}
