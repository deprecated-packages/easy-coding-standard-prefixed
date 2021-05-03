<?php

namespace _PhpScopere72a8aaba560\Psr\Log;

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
    public function setLogger(\_PhpScopere72a8aaba560\Psr\Log\LoggerInterface $logger);
}
