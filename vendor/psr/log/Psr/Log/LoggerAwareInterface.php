<?php

namespace _PhpScoper6ffa0951a2e9\Psr\Log;

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
    public function setLogger(\_PhpScoper6ffa0951a2e9\Psr\Log\LoggerInterface $logger);
}
