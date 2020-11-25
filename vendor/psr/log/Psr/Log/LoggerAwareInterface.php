<?php

namespace _PhpScoper2f75f00bf6fa\Psr\Log;

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
    public function setLogger(\_PhpScoper2f75f00bf6fa\Psr\Log\LoggerInterface $logger);
}
