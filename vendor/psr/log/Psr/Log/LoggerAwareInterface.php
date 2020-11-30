<?php

namespace _PhpScoper2637e9a72c68\Psr\Log;

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
    public function setLogger(\_PhpScoper2637e9a72c68\Psr\Log\LoggerInterface $logger);
}
