<?php

namespace _PhpScoper5e93f39f19fe\Psr\Log;

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
    public function setLogger(\_PhpScoper5e93f39f19fe\Psr\Log\LoggerInterface $logger);
}
