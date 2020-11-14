<?php

namespace _PhpScoperddde3ba4aebc\Psr\Log;

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
    public function setLogger(\_PhpScoperddde3ba4aebc\Psr\Log\LoggerInterface $logger);
}
