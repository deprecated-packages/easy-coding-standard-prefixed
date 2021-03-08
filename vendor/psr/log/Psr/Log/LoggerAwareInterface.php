<?php

namespace _PhpScoper4f42ead57614\Psr\Log;

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
    public function setLogger(\_PhpScoper4f42ead57614\Psr\Log\LoggerInterface $logger);
}
