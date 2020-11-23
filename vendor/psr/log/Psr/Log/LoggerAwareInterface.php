<?php

namespace _PhpScoperc4b135661b3a\Psr\Log;

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
    public function setLogger(\_PhpScoperc4b135661b3a\Psr\Log\LoggerInterface $logger);
}
