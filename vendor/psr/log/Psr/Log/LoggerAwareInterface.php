<?php

namespace _PhpScoper6d453419d16a\Psr\Log;

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
    public function setLogger(\_PhpScoper6d453419d16a\Psr\Log\LoggerInterface $logger);
}
