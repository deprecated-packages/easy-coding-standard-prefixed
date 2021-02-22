<?php

namespace _PhpScoper10b1b2c5ca55\Psr\Log;

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
    public function setLogger(\_PhpScoper10b1b2c5ca55\Psr\Log\LoggerInterface $logger);
}
