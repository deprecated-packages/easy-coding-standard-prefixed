<?php

namespace _PhpScoper6db4fde00cda\Psr\Log;

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
    public function setLogger(\_PhpScoper6db4fde00cda\Psr\Log\LoggerInterface $logger);
}
