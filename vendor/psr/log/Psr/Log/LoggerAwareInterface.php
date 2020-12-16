<?php

namespace _PhpScoperb6a8e65b492c\Psr\Log;

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
    public function setLogger(\_PhpScoperb6a8e65b492c\Psr\Log\LoggerInterface $logger);
}
