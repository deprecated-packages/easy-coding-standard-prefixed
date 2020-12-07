<?php

namespace _PhpScoperb73f9e44f4eb\Psr\Log;

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
    public function setLogger(\_PhpScoperb73f9e44f4eb\Psr\Log\LoggerInterface $logger);
}
