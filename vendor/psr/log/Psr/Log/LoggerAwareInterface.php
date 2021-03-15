<?php

namespace _PhpScoper8163b0b2b8f3\Psr\Log;

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
    public function setLogger(\_PhpScoper8163b0b2b8f3\Psr\Log\LoggerInterface $logger);
}
