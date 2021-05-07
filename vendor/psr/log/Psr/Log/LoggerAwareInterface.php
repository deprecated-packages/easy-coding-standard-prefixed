<?php

namespace _PhpScoper2dcc760f8ff8\Psr\Log;

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
    public function setLogger(\_PhpScoper2dcc760f8ff8\Psr\Log\LoggerInterface $logger);
}
