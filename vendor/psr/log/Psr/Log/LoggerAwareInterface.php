<?php

namespace _PhpScoperea337ed74749\Psr\Log;

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
    public function setLogger(\_PhpScoperea337ed74749\Psr\Log\LoggerInterface $logger);
}
