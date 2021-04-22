<?php

namespace _PhpScopera9d6a31d814c\Psr\Log;

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
    public function setLogger(\_PhpScopera9d6a31d814c\Psr\Log\LoggerInterface $logger);
}
