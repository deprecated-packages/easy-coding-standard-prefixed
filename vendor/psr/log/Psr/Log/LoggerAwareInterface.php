<?php

namespace _PhpScopera09818bc50da\Psr\Log;

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
    public function setLogger(\_PhpScopera09818bc50da\Psr\Log\LoggerInterface $logger);
}
