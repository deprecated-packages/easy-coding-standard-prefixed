<?php

namespace _PhpScoper4fedb9aa1e5f\Psr\Log;

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
    public function setLogger(\_PhpScoper4fedb9aa1e5f\Psr\Log\LoggerInterface $logger);
}
