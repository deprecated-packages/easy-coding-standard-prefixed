<?php

namespace _PhpScoper8b3c9ad56565\Psr\Log;

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
    public function setLogger(\_PhpScoper8b3c9ad56565\Psr\Log\LoggerInterface $logger);
}
