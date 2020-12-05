<?php

namespace _PhpScoper81b3ff5ab9fe\Psr\Log;

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
    public function setLogger(\_PhpScoper81b3ff5ab9fe\Psr\Log\LoggerInterface $logger);
}
