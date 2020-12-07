<?php

namespace _PhpScoperb83706991c7f\Psr\Log;

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
    public function setLogger(\_PhpScoperb83706991c7f\Psr\Log\LoggerInterface $logger);
}
