<?php

namespace _PhpScoper4575b9150b52\Psr\Log;

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
    public function setLogger(\_PhpScoper4575b9150b52\Psr\Log\LoggerInterface $logger);
}
