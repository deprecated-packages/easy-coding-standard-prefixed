<?php

namespace _PhpScopercda2b863d098\Psr\Log;

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
    public function setLogger(\_PhpScopercda2b863d098\Psr\Log\LoggerInterface $logger);
}
