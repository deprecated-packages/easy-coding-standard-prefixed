<?php

namespace _PhpScoper7d3888cf4297\Psr\Log;

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
    public function setLogger(\_PhpScoper7d3888cf4297\Psr\Log\LoggerInterface $logger);
}
