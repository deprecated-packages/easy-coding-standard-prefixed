<?php

namespace _PhpScoperba24099fc6fd\Psr\Log;

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
    public function setLogger(\_PhpScoperba24099fc6fd\Psr\Log\LoggerInterface $logger);
}
