<?php

namespace _PhpScoperaa402dd1b1f1\Psr\Log;

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
    public function setLogger(\_PhpScoperaa402dd1b1f1\Psr\Log\LoggerInterface $logger);
}
