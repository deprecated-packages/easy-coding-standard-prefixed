<?php

namespace _PhpScoper21fff473f90a\Psr\Log;

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
    public function setLogger(\_PhpScoper21fff473f90a\Psr\Log\LoggerInterface $logger);
}
