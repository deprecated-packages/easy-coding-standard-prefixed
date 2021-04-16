<?php

namespace _PhpScoper8a8080b03ed6\Psr\Log;

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
    public function setLogger(\_PhpScoper8a8080b03ed6\Psr\Log\LoggerInterface $logger);
}
