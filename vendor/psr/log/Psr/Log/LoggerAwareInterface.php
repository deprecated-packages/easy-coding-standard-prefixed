<?php

namespace _PhpScopera1a51450b61d\Psr\Log;

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
    public function setLogger(\_PhpScopera1a51450b61d\Psr\Log\LoggerInterface $logger);
}
