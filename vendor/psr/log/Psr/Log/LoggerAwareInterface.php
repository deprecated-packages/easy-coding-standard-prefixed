<?php

namespace _PhpScoper611f49771945\Psr\Log;

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
    public function setLogger(\_PhpScoper611f49771945\Psr\Log\LoggerInterface $logger);
}
