<?php

namespace _PhpScoper0d0ee1ba46d4\Psr\Log;

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
    public function setLogger(\_PhpScoper0d0ee1ba46d4\Psr\Log\LoggerInterface $logger);
}
