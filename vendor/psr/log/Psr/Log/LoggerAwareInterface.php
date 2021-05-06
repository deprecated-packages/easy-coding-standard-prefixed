<?php

namespace _PhpScopere7e518ee6a5b\Psr\Log;

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
    public function setLogger(\_PhpScopere7e518ee6a5b\Psr\Log\LoggerInterface $logger);
}
