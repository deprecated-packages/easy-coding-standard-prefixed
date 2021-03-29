<?php

namespace _PhpScoper5e5c2222758f\Psr\Log;

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
    public function setLogger(\_PhpScoper5e5c2222758f\Psr\Log\LoggerInterface $logger);
}
