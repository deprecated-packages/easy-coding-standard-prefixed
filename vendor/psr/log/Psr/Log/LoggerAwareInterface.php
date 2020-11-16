<?php

namespace _PhpScoper6207116d4311\Psr\Log;

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
    public function setLogger(\_PhpScoper6207116d4311\Psr\Log\LoggerInterface $logger);
}
