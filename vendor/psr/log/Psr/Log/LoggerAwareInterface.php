<?php

namespace _PhpScoper5a9febfbbe05\Psr\Log;

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
    public function setLogger(\_PhpScoper5a9febfbbe05\Psr\Log\LoggerInterface $logger);
}
