<?php

namespace _PhpScoper7e6a1331d94a\Psr\Log;

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
    public function setLogger(\_PhpScoper7e6a1331d94a\Psr\Log\LoggerInterface $logger);
}
