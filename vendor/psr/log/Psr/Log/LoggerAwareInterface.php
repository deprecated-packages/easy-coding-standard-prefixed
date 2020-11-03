<?php

namespace _PhpScoper589e8c04a9ef\Psr\Log;

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
    public function setLogger(\_PhpScoper589e8c04a9ef\Psr\Log\LoggerInterface $logger);
}
