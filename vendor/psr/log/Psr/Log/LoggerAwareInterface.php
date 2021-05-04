<?php

namespace _PhpScopercfeba9d8ad31\Psr\Log;

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
    public function setLogger(\_PhpScopercfeba9d8ad31\Psr\Log\LoggerInterface $logger);
}
