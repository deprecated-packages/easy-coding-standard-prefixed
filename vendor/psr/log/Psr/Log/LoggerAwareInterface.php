<?php

namespace _PhpScoperfcf15c26e033\Psr\Log;

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
    public function setLogger(\_PhpScoperfcf15c26e033\Psr\Log\LoggerInterface $logger);
}
