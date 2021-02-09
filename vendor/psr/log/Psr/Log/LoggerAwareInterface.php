<?php

namespace _PhpScoper807f8e74693b\Psr\Log;

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
    public function setLogger(\_PhpScoper807f8e74693b\Psr\Log\LoggerInterface $logger);
}
