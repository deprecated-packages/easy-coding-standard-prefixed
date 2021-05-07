<?php

namespace _PhpScopercae9e6ab5cea\Psr\Log;

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
    public function setLogger(\_PhpScopercae9e6ab5cea\Psr\Log\LoggerInterface $logger);
}
