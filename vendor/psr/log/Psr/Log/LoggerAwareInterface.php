<?php

namespace _PhpScoper2dc059b3a969\Psr\Log;

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
    public function setLogger(\_PhpScoper2dc059b3a969\Psr\Log\LoggerInterface $logger);
}
