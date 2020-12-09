<?php

namespace _PhpScoper9b9ddfd01528\Psr\Log;

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
    public function setLogger(\_PhpScoper9b9ddfd01528\Psr\Log\LoggerInterface $logger);
}
