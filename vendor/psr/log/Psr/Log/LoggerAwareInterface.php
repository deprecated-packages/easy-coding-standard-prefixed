<?php

namespace _PhpScopera4fc793dae73\Psr\Log;

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
    public function setLogger(\_PhpScopera4fc793dae73\Psr\Log\LoggerInterface $logger);
}
