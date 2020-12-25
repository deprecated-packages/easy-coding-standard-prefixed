<?php

namespace _PhpScoper92597f5b42a7\Psr\Log;

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
    public function setLogger(\_PhpScoper92597f5b42a7\Psr\Log\LoggerInterface $logger);
}
