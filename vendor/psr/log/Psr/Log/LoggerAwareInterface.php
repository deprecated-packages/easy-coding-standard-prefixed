<?php

namespace _PhpScoperc83f84c90b60\Psr\Log;

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
    public function setLogger(\_PhpScoperc83f84c90b60\Psr\Log\LoggerInterface $logger);
}
