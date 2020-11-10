<?php

namespace _PhpScoper0c236037eb04\Psr\Log;

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
    public function setLogger(\_PhpScoper0c236037eb04\Psr\Log\LoggerInterface $logger);
}
