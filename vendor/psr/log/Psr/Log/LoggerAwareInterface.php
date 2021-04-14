<?php

namespace _PhpScoperd8b0b9452568\Psr\Log;

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
    public function setLogger(\_PhpScoperd8b0b9452568\Psr\Log\LoggerInterface $logger);
}
