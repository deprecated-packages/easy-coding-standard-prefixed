<?php

namespace _PhpScoper83a475a0590e\Psr\Log;

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
    public function setLogger(\_PhpScoper83a475a0590e\Psr\Log\LoggerInterface $logger);
}
