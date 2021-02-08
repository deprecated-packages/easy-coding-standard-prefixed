<?php

namespace _PhpScoper7faa8deb0d3c\Psr\Log;

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
    public function setLogger(\_PhpScoper7faa8deb0d3c\Psr\Log\LoggerInterface $logger);
}
