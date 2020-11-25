<?php

namespace _PhpScoper13133e188f67\Psr\Log;

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
    public function setLogger(\_PhpScoper13133e188f67\Psr\Log\LoggerInterface $logger);
}
