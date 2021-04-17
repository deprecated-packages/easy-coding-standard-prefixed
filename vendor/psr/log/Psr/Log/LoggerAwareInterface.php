<?php

namespace _PhpScoper0c575b5c37d7\Psr\Log;

/**
 * Describes a logger-aware instance.
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object.
     *
     * @param LoggerInterface $logger
     *
     * @return void
     */
    public function setLogger(\_PhpScoper0c575b5c37d7\Psr\Log\LoggerInterface $logger);
}
