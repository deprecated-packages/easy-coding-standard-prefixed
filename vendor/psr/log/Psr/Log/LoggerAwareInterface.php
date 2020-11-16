<?php

namespace _PhpScoper8e2d8a2760d1\Psr\Log;

/**
 * Describes a logger-aware instance
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object
     *
     * @param LoggerInterface $logger
     * @return null
     */
    public function setLogger(\_PhpScoper8e2d8a2760d1\Psr\Log\LoggerInterface $logger);
}
