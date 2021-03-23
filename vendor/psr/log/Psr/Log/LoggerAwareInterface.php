<?php

namespace _PhpScoper6ae4c4f86624\Psr\Log;

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
    public function setLogger(\_PhpScoper6ae4c4f86624\Psr\Log\LoggerInterface $logger);
}
