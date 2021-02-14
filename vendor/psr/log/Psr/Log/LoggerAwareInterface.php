<?php

namespace _PhpScoper89c09b8e7101\Psr\Log;

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
    public function setLogger(\_PhpScoper89c09b8e7101\Psr\Log\LoggerInterface $logger);
}
