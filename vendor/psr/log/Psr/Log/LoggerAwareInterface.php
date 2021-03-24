<?php

namespace _PhpScopere66f4b626446\Psr\Log;

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
    public function setLogger(\_PhpScopere66f4b626446\Psr\Log\LoggerInterface $logger);
}
