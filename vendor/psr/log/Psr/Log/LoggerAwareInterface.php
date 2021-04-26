<?php

namespace _PhpScoper917c99b6aa4c\Psr\Log;

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
    public function setLogger(\_PhpScoper917c99b6aa4c\Psr\Log\LoggerInterface $logger);
}
