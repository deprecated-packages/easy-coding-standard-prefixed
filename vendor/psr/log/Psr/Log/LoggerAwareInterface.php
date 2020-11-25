<?php

namespace _PhpScoper2a48669dad72\Psr\Log;

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
    public function setLogger(\_PhpScoper2a48669dad72\Psr\Log\LoggerInterface $logger);
}
