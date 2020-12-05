<?php

namespace _PhpScoper56c9df53a081\Psr\Log;

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
    public function setLogger(\_PhpScoper56c9df53a081\Psr\Log\LoggerInterface $logger);
}
