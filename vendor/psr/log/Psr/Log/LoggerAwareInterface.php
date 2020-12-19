<?php

namespace _PhpScoperd1a5bf00e83e\Psr\Log;

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
    public function setLogger(\_PhpScoperd1a5bf00e83e\Psr\Log\LoggerInterface $logger);
}
