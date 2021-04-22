<?php

namespace _PhpScoper22e359cd1ab0\Psr\Log;

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
    public function setLogger(\_PhpScoper22e359cd1ab0\Psr\Log\LoggerInterface $logger);
}
