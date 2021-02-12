<?php

namespace _PhpScoper4fc0030e9d22\Psr\Log;

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
    public function setLogger(\_PhpScoper4fc0030e9d22\Psr\Log\LoggerInterface $logger);
}
