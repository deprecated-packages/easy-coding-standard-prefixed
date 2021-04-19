<?php

namespace _PhpScoper1c0f546920a5\Psr\Log;

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
    public function setLogger(\_PhpScoper1c0f546920a5\Psr\Log\LoggerInterface $logger);
}
