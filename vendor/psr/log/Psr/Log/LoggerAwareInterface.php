<?php

namespace _PhpScoperb730595bc9f4\Psr\Log;

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
    public function setLogger(\_PhpScoperb730595bc9f4\Psr\Log\LoggerInterface $logger);
}
