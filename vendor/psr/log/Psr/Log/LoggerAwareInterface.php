<?php

namespace _PhpScopere341acab57d4\Psr\Log;

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
    public function setLogger(\_PhpScopere341acab57d4\Psr\Log\LoggerInterface $logger);
}
