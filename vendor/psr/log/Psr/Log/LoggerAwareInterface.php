<?php

namespace _PhpScoper96c81c3c1716\Psr\Log;

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
    public function setLogger(\_PhpScoper96c81c3c1716\Psr\Log\LoggerInterface $logger);
}
