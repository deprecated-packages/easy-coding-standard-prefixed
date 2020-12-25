<?php

namespace _PhpScoper7c1f54fd2f3a\Psr\Log;

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
    public function setLogger(\_PhpScoper7c1f54fd2f3a\Psr\Log\LoggerInterface $logger);
}
