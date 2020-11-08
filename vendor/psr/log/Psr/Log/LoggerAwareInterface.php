<?php

namespace _PhpScoperd79d87c3336e\Psr\Log;

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
    public function setLogger(\_PhpScoperd79d87c3336e\Psr\Log\LoggerInterface $logger);
}
