<?php

namespace _PhpScoperedc2e0c967db\Psr\Log;

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
    public function setLogger(\_PhpScoperedc2e0c967db\Psr\Log\LoggerInterface $logger);
}
