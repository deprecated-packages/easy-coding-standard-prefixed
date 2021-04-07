<?php

namespace _PhpScoper57c79939064b\Psr\Log;

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
    public function setLogger(\_PhpScoper57c79939064b\Psr\Log\LoggerInterface $logger);
}
