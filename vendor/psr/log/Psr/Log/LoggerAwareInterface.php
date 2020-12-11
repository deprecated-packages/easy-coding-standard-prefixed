<?php

namespace _PhpScoperc7c7dddc9238\Psr\Log;

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
    public function setLogger(\_PhpScoperc7c7dddc9238\Psr\Log\LoggerInterface $logger);
}
