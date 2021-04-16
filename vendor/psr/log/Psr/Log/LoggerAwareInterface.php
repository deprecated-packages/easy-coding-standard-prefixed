<?php

namespace _PhpScopera22bb3f4d7b7\Psr\Log;

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
    public function setLogger(\_PhpScopera22bb3f4d7b7\Psr\Log\LoggerInterface $logger);
}
