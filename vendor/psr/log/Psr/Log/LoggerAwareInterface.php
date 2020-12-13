<?php

namespace _PhpScoper4298f97f3cb3\Psr\Log;

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
    public function setLogger(\_PhpScoper4298f97f3cb3\Psr\Log\LoggerInterface $logger);
}
