<?php

namespace _PhpScoper326bba7310a2\Psr\Log;

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
    public function setLogger(\_PhpScoper326bba7310a2\Psr\Log\LoggerInterface $logger);
}
