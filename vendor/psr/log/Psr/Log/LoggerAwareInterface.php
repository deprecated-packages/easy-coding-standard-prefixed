<?php

namespace _PhpScoperb6ccec8ab642\Psr\Log;

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
    public function setLogger(\_PhpScoperb6ccec8ab642\Psr\Log\LoggerInterface $logger);
}
