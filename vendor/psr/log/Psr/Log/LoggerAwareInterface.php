<?php

namespace _PhpScoperda2604e33acb\Psr\Log;

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
    public function setLogger(\_PhpScoperda2604e33acb\Psr\Log\LoggerInterface $logger);
}
