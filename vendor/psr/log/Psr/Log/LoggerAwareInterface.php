<?php

namespace _PhpScoper57210e33e43a\Psr\Log;

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
    public function setLogger(\_PhpScoper57210e33e43a\Psr\Log\LoggerInterface $logger);
}
