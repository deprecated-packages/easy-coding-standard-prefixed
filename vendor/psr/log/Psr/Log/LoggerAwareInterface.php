<?php

namespace _PhpScoper5f6e904600e7\Psr\Log;

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
    public function setLogger(\_PhpScoper5f6e904600e7\Psr\Log\LoggerInterface $logger);
}
