<?php

namespace _PhpScoper544eb478a6f6\Psr\Log;

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
    public function setLogger(\_PhpScoper544eb478a6f6\Psr\Log\LoggerInterface $logger);
}
