<?php

namespace _PhpScoper3e1e0e5bb8ef\Psr\Log;

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
    public function setLogger(\_PhpScoper3e1e0e5bb8ef\Psr\Log\LoggerInterface $logger);
}
